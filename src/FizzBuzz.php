<?php


namespace App;


class FizzBuzz
{

    /**
     * FizzBuzz constructor.
     */
    public function __construct()
    {
    }

    public function generate()
    {
        $data = [];

        for( $i=1; $i<=100; $i++) {

            if ($i % 3 == 0) {
                $data[] = "Fizz";
            } else if ($i % 5 == 0) {
                $data[] = "Buzz";
            } else {
                $data[] = "$i";
            }

        }

        return $data;
    }
}