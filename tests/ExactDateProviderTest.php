<?php

declare(strict_types=1);

namespace OlajosCs\DateProvider;

use PHPUnit\Framework\TestCase;

class ExactDateProviderTest extends TestCase
{
    public function test_date_time(): void
    {
        $dateTime = '1988-05-21 11:12:13';

        $dateProvider = new ExactDateProvider(new \DateTimeImmutable($dateTime));

        $this->assertSame($dateTime, $dateProvider->getNow()->format('Y-m-d H:i:s'));
    }


    public function test_date(): void
    {
        $dateTime = '1988-05-21 11:12:13';
        $expected = '1988-05-21 00:00:00';

        $dateProvider = new ExactDateProvider(new \DateTimeImmutable($dateTime));

        $this->assertSame($expected, $dateProvider->getToday()->format('Y-m-d H:i:s'));
    }


    public function test_create_from_string(): void
    {
        $dateTime = '1988-05-21 11:12:13';

        $dateProvider = ExactDateProvider::createFromString($dateTime);

        $this->assertSame($dateTime, $dateProvider->getNow()->format('Y-m-d H:i:s'));
    }


    public function test_create_from_timestamp(): void
    {
        $timestamp = 580216333;

        $dateProvider = ExactDateProvider::createFromTimestamp($timestamp);

        $this->assertSame($timestamp, $dateProvider->getNow()->getTimestamp());
    }
}