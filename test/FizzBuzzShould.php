<?php

namespace App\Test;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\equalTo;

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

    /**
     * @test
     */
    public function elements_goes_from_1_to_100() {
        $fizzBuzz = new FizzBuzz();
        $data = $fizzBuzz->generate();
        $this->assertThat($data[0], $this->equalTo("1"));
        $this->assertThat($data[8], $this->equalTo("7"));
        $this->assertThat($data[97], $this->equalTo("98"));
    }

}
