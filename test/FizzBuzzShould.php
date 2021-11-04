<?php

namespace App\Test;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzShould extends TestCase
{
    /**
     * @test
     */
    public function return_an_array_with_100_elements() {
        $fizzBuzz = new FizzBuzz();
        $data = $fizzBuzz->generate();
        $this->assertEquals(100, count($data));
    }

}
