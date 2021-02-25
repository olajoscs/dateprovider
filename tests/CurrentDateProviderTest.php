<?php

declare(strict_types=1);

namespace OlajosCs\DateProvider;

use PHPUnit\Framework\TestCase;

class CurrentDateProviderTest extends TestCase
{
    public function test_date_time(): void
    {
        $dateProvider = new CurrentDateProvider();
        $now = (new \DateTimeImmutable())->getTimestamp();

        $this->assertEquals($now, $dateProvider->getNow()->getTimestamp());
    }


    public function test_date(): void
    {
        $dateProvider = new CurrentDateProvider();
        $today = (new \DateTimeImmutable())->setTime(0, 0, 0);

        $this->assertEquals($today, $dateProvider->getToday());
    }
}