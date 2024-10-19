<?php

declare(strict_types=1);

namespace HDNET\Calendarize\ViewHelpers\Loop;

/**
 * Months in year view Helper.
 */
class MonthsInYearViewHelper extends AbstractLoopViewHelper
{
    /**
     * Get the items.
     *
     * @param \DateTime $date
     *
     * @return array
     */
    protected function getItems(\DateTime $date): array
    {
        $months = [];
        $originalDate = clone $date;
        // use the thrid day, to avoid time shift problems in the timezone
        $date->setDate((int)$date->format('Y'), 1, 3);
        for ($i = 0; $i < 12; ++$i) {
            $currentMonth = $originalDate->format('Y-m') === $date->format('Y-m');
            $months[$date->format('n')] = [
                'date' => $currentMonth ? clone $originalDate : clone $date,
                'break3' => $date->format('n') % 3,
                'break4' => $date->format('n') % 4,
                'selectDay' => $currentMonth,
                'ignoreSelectedDay' => !$currentMonth,
            ];

            $date->modify('+1 month');
        }

        return $months;
    }
}
