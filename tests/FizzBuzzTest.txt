<?php
require __DIR__ . '/../vendor/autoload.php';

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class FizzBuzzTest extends TestCase {


    #[Test]
    public function it_returns_fizz_for_multiples_of_3(){

        foreach ([3,6,9,12] as $number) {
            
            $this->assertEquals('Fizz', FizzBuzz::convert($number));
        }
    }

    #[Test]
    public function it_returns_buzz_for_multiples_of_5(){

        foreach ([5,10,20,25] as $number) {
            
            $this->assertEquals('Buzz', FizzBuzz::convert($number));
        }
    }

    #[Test]
    public function it_returns_fizzbuzz_for_multiples_of_both(){

        foreach ([15, 30] as $number) {
            
            $this->assertEquals('FizzBuzz', FizzBuzz::convert($number));
        }
    }

    #[Test]
    public function it_returns_the_given_number_for_numbers_that_are_not_multiple_of_3_or_5(){

        foreach ([2,4,8] as $number) {
            
            $this->assertEquals($number, FizzBuzz::convert($number));
        }
    }


}