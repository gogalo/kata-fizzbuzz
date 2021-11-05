<?php


namespace App;


class FizzBuzz
{
    public function generate()
    {
        return array_map([$this, 'transform'], range(1, 100));
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isFizz(int $number): bool
    {
        return $number % 3 == 0;
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isBuzz(int $number): bool
    {
        return $number % 5 == 0;
    }

    /**
     * @param int $i
     * @return bool
     */
    private function isFizzBuzz(int $i): bool
    {
        return $this->isFizz($i) && $this->isBuzz($i);
    }

    /**
     * @param $number
     * @return string
     */
    private function transform($number): string
    {
        if ($this->isFizzBuzz($number)) {
            return "FizzBuzz";
        }

        if ($this->isFizz($number)) {
            return "Fizz";
        }

        if ($this->isBuzz($number)) {
            return "Buzz";
        }

        return (string) $number;
    }
}