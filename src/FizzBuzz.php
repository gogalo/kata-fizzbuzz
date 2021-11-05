<?php


namespace App;


class FizzBuzz
{
    public function generate()
    {
        $data = [];

        for( $i=1; $i<=100; $i++) {
            if ($this->isFizzBuzz($i)) {
                $data[] = "FizzBuzz";
            } else if ($this->isFizz($i)) {
                $data[] = "Fizz";
            } else if ($this->isBuzz($i)) {
                $data[] = "Buzz";
            } else {
                $data[] = "$i";
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