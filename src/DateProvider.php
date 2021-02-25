<?php

declare(strict_types=1);

namespace OlajosCs\DateProvider;

/**
 * Provides dates
 */
interface DateProvider
{
    /**
     * Return the current date/time
     *
     * @return \DateTimeImmutable
     */
    public function getNow(): \DateTimeImmutable;


    /**
     * Return the current date without time (00:00:00)
     *
     * @return \DateTimeImmutable
     */
    public function getToday(): \DateTimeImmutable;
}