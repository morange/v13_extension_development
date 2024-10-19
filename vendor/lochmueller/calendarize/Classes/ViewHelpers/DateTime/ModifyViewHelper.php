<?php

declare(strict_types=1);

namespace HDNET\Calendarize\ViewHelpers\DateTime;

use HDNET\Calendarize\Utility\DateTimeUtility;
use HDNET\Calendarize\ViewHelpers\AbstractViewHelper;

/**
 * Modify a DateTime@.
 */
class ModifyViewHelper extends AbstractViewHelper
{
    /**
     * Init arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerArgument('modification', 'string', 'DateTime Object Modification String', true, '');
        $this->registerArgument('dateTime', \DateTimeInterface::class, 'DateTime to modify', false, null);
    }

    /**
     * Modify the given datetime by the string modification.
     */
    public function render(): \DateTime|false
    {
        $dateTime = $this->arguments['dateTime'];

        if (null === $dateTime) {
            $dateTime = $this->renderChildren();
        }
        if (!$dateTime instanceof \DateTimeInterface) {
            $dateTime = DateTimeUtility::getNow();
        }

        $clone = clone $dateTime;

        return $clone->modify($this->arguments['modification']);
    }
}
