<?php

declare(strict_types=1);

namespace OlajosCs\DateProvider;

/**
 * Provides an exact date and time
 */
class ExactDateProvider implements DateProvider
{
    /**
     * @var \DateTimeImmutable
     */
    private $date;


    public function __construct(\DateTimeImmutable $date)
    {
        $this->date = $date;
    }


    /**
     * Create a provider from the string - which must be acceptable by the \DateTimeImmutable class
     *
     * @param string $string
     *
     * @return self
     */
    public static function createFromString(string $string): self
    {
        return new static(new \DateTimeImmutable($string));
    }


    /**
     * Create a provider from the timestamp
     *
     * @param int $timestamp
     *
     * @return self
     */
    public static function createFromTimestamp(int $timestamp): self
    {
        return new static((new \DateTimeImmutable())->setTimestamp($timestamp));
    }


    public function getNow(): \DateTimeImmutable
    {
        return $this->date;
    }


    public function getToday(): \DateTimeImmutable
    {
        return new \DateTimeImmutable($this->date->format('Y-m-d'));
    }
}