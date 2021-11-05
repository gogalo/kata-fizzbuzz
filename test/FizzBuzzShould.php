<?php

namespace App\Test;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\equalTo;

class FizzBuzzShould extends TestCase
{
    protected $data;

    public function setUp(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->data = $fizzBuzz->generate();
    }

    /**
     * @test
     */
    public function return_an_array_with_100_elements()
    {
        $this->assertThat(count($this->data), $this->equalTo(100));
    }

    /**
     * @test
     */
    public function elements_goes_from_1_to_100()
    {
        $this->assertThat($this->getFizzBuzzValue(1), $this->equalTo("1"));
        $this->assertThat($this->getFizzBuzzValue(7), $this->equalTo("7"));
        $this->assertThat($this->getFizzBuzzValue(98), $this->equalTo("98"));
    }

    /**
     * @test
     */
    public function return_fizz_if_divisible_by_3()
    {
        $this->assertThat($this->getFizzBuzzValue(3), $this->equalTo("Fizz"));
        $this->assertThat($this->getFizzBuzzValue(9), $this->equalTo("Fizz"));
        $this->assertThat($this->getFizzBuzzValue(99), $this->equalTo("Fizz"));
    }

    /**
     * @param int $i
     * @return mixed
     */
    private function getFizzBuzzValue(int $i)
    {
        return $this->data[$i -1];
    }

}
