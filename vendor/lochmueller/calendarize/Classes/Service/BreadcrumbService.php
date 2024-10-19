<?php

declare(strict_types=1);

namespace HDNET\Calendarize\Service;

use HDNET\Calendarize\Domain\Model\Index;
use HDNET\Calendarize\Domain\Repository\IndexRepository;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\HttpUtility;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * BreadcrumbService.
 */
class BreadcrumbService extends AbstractService
{
    public function generate(string $content, array $configuration, ServerRequestInterface $request): string
    {
        $arguments = $request->getQueryParams()['tx_calendarize_calendar'] ?? null;
        $indexUid = isset($arguments['index']) ? (int)$arguments['index'] : 0;
        if (0 === $indexUid) {
            return $content;
        }

        $index = $this->getIndex($indexUid);
        if (null === $index) {
            return $content;
        }

        $title = $this->getEventByIndex($index)->getTitle();
        $contentObjectRenderer = GeneralUtility::makeInstance(ContentObjectRenderer::class);

        if ($configuration['doNotLinkIt'] ?? false) {
            $content = $title;
        } else {
            $linkConfiguration = [
                'parameter' => $request->getAttribute('routing')->getPageId(),
                'additionalParams' => HttpUtility::buildQueryString([
                    'tx_calendarize_calendar' => [
                        'index' => $indexUid,
                        'controller' => 'Calendar',
                        'action' => 'detail',
                    ],
                ], '&'),
            ];
            $content = $contentObjectRenderer->typoLink($title, $linkConfiguration);
        }

        return $contentObjectRenderer->stdWrap($content, $configuration);
    }

    protected function getEventByIndex(Index $index): AbstractEntity
    {
        return $index->getOriginalObject();
    }

    protected function getIndex(int $uid): ?Index
    {
        return GeneralUtility::makeInstance(IndexRepository::class)->findByUid($uid);
    }
}
