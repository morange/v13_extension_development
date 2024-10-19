<?php

declare(strict_types=1);

namespace HDNET\Calendarize\ViewHelpers;

use HDNET\Calendarize\Utility\DateTimeUtility;

/**
 * Check if a date is upper.
 */
class IfDateUpperViewHelper extends AbstractViewHelper
{
    /**
     * Initialize arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerArgument('base', 'mixed', '', true);
        $this->registerArgument('check', 'mixed', '', true);
    }

    /**
     * Render the view helper.
     *
     * Note: You have to wrap this view helper in an f:if ViewHelper.
     * This VH just return a boolean evaluation value
     */
    public function render(): bool
    {
        $base = $this->arguments['base'];
        $check = $this->arguments['check'];
        $base = DateTimeUtility::normalizeDateTimeSingle($base);
        $check = DateTimeUtility::normalizeDateTimeSingle($check);

        return $base < $check;
    }
}
