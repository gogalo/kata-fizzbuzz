<?php


namespace App;


class FizzBuzz
{
    public function generate()
    {
        $data = [];

        foreach( range(1,100) as $number) {
            if ($this->isFizzBuzz($number)) {
                $data[] = "FizzBuzz";
            } else if ($this->isFizz($number)) {
                $data[] = "Fizz";
            } else if ($this->isBuzz($number)) {
                $data[] = "Buzz";
            } else {
                $data[] = "$number";
            }
        }

        return $data;
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
}