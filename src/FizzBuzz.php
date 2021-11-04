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
            $data[] = "";
        }
        return $data;
    }
}