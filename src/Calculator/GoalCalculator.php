<?php

declare(strict_types=1);

namespace Haralb\FinanceCalculator\Calculator;

use Haralb\FinanceCalculator\Enum\Period;
use Haralb\FinanceCalculator\ValueObject\Money;

final class GoalCalculator
{
    /**
     * @param Money $start
     * @param Money $target
     * @param float $aprPercent
     * @param Period $period
     * @return int
     */
    public function periodsToTarget(
        Money $start,
        Money $target,
        float $aprPercent,
        Period $period
    ): int {

        $r = $aprPercent / 100;
        $n = $period->compoundsPerYear();

        $years = log($target->amount / $start->amount) /
            ($n * log(1 + $r / $n));

        return (int) ceil($years * $n);
    }
}