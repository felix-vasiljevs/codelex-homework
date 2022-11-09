<?php

class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function setMonth(int $month): void
    {
        if ($month > 0 && $month <= 12) {
            $this->month = $month;
        }
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setDay(int $day): void
    {
        if ($day > 0 && $day < 30) {
            $this->day = $day;
        }
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function DisplayDate(): int
    {
        return $this->getMonth() . $this->getDay() . $this->getYear();
    }
}

$a = new Date(5,7,2065);

echo "{$a->getMonth()}/{$a->getMonth()}/{$a->getYear()}";

