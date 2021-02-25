<?php

declare(strict_types=1);

namespace OlajosCs\DateProvider;

/**
 * Provides current date and time
 */
class CurrentDateProvider implements DateProvider
{
    public function getNow(): \DateTimeImmutable
    {
        return new \DateTimeImmutable();
    }


    public function getToday(): \DateTimeImmutable
    {
        return (new \DateTimeImmutable())->setTime(0, 0, 0);
    }
}