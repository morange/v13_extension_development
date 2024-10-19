<?php

declare(strict_types=1);

namespace HDNET\Calendarize\Hooks;

use HDNET\Calendarize\Domain\Model\Index;
use HDNET\Calendarize\Features\KeSearchIndexInterface;
use HDNET\Calendarize\Service\IndexerService;
use Tpwd\KeSearch\Indexer\IndexerRunner;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\Restriction\DeletedRestriction;
use TYPO3\CMS\Core\Database\Query\Restriction\HiddenRestriction;
use TYPO3\CMS\Core\Database\Query\Restriction\WorkspaceRestriction;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\HttpUtility;
use TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMapper;

/**
 * KE Search Indexer.
 */
class KeSearchIndexer
{
    public const KEY = 'calendarize';
    public const TABLE = IndexerService::TABLE_NAME;

    /**
     * Register the indexer configuration.
     */
    public function registerIndexerConfiguration(array &$params, ?object $pObj): void
    {
        $newArray = [
            'Calendarize Indexer',
            self::KEY,
            'EXT:calendarize/Resources/Public/Icons/Extension.svg',
        ];
        $params['items'][] = $newArray;
    }

    /**
     * Calendarize indexer for ke_search.
     */
    public function customIndexer(array &$indexerConfig, IndexerRunner &$indexerObject): string
    {
        if (self::KEY !== $indexerConfig['type']) {
            return '';
        }
        $languageField = $GLOBALS['TCA'][self::TABLE]['ctrl']['languageField']; // e.g. sys_language_uid

        $dataMapper = GeneralUtility::makeInstance(DataMapper::class);

        // We use a QueryBuilder instead of the IndexRepository, to avoid problems with workspaces, ...
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable(self::TABLE);

        // Don't fetch hidden, deleted or workspace elements, but the elements
        // with frontend user group access restrictions or time (start / stop)
        // restrictions in order to copy those restrictions to the index.
        $queryBuilder->getRestrictions()
            ->removeAll()
            ->add(GeneralUtility::makeInstance(DeletedRestriction::class))
            ->add(GeneralUtility::makeInstance(HiddenRestriction::class))
            ->add(GeneralUtility::makeInstance(WorkspaceRestriction::class, 0));

        $pids = GeneralUtility::intExplode(',', $indexerConfig['sysfolder']);
        $result = $queryBuilder
            ->select('*')
            ->from(self::TABLE)
            ->where($queryBuilder->expr()->in('pid', $pids))
            ->executeQuery();

        $indexedCounter = 0;

        if ($result->rowCount() > 0) {
            while ($row = $result->fetchAssociative()) {
                try {
                    /** @var Index $index */
                    // Get domainObject to check and call the feature/interface
                    $index = $dataMapper->map(Index::class, [$row])[0];
                    $originalObject = $index->getOriginalObject();

                    if (!($originalObject instanceof KeSearchIndexInterface)) {
                        continue;
                    }

                    $title = strip_tags($originalObject->getKeSearchTitle($index));
                    $abstract = strip_tags($originalObject->getKeSearchAbstract($index));
                    $content = strip_tags($originalObject->getKeSearchContent($index));
                    $fullContent = $title . "\n" . $abstract . "\n" . $content;

                    $additionalFields = [
                        'sortdate' => $index->getStartDateComplete()->getTimestamp(),
                        'orig_uid' => $row['uid'],
                        'orig_pid' => $row['pid'],
                    ];

                    $params = HttpUtility::buildQueryString([
                        'tx_calendarize_calendar' => [
                            'index' => $row['uid'],
                            'controller' => 'Calendar',
                            'action' => 'detail',
                        ],
                    ], '&');

                    $storeArguments = [
                        $indexerConfig['storagepid'],               // storage PID
                        $title,                                     // record title
                        self::KEY,                                  // content type
                        $indexerConfig['targetpid'],                // target PID: where is the single view?
                        // indexed content, includes the title (linebreak after title)
                        $fullContent,
                        $originalObject->getKeSearchTags($index),   // tags for faceted search
                        $params,                                    // typolink params for singleview
                        $abstract,                                  // abstract; shown in result list if not empty
                        $row[$languageField],                       // language uid
                        $row['starttime'],                          // starttime
                        $row['endtime'],                            // endtime
                        $row['fe_group'],                           // fe_group
                        false,                                      // debug only?
                        $additionalFields,                          // additionalFields
                    ];

                    $indexerObject->storeInIndex(...$storeArguments);
                    ++$indexedCounter;
                } catch (\Exception $exception) {
                    $indexerObject->logger->error('Unable to index ' . $row['uid'] . ': ' . $exception->getMessage());
                }
            }
        } else {
            $indexerObject->logger->info('No calendarize records found for indexing!');
        }
        $msg = 'Custom Indexer "' . $indexerConfig['title'] . '": ' . $indexedCounter . ' elements have been indexed.';
        $indexerObject->logger->info($msg);

        return $msg;
    }
}
