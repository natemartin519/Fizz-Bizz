<?php

use App\FizzBizz;

class FizzBizzTest extends PHPUnit_Framework_TestCase
{

    public function testMultipleOfThreeShouldReturnFizz()
    {
        $inputOne = 3;
        $inputTwo = 6;

        $resultOne = FizzBizz::EvaluateFizzBizz($inputOne);
        $resultTwo = FizzBizz::EvaluateFizzBizz($inputTwo);

        $this->assertEquals('Fizz', $resultOne);
        $this->assertEquals('Fizz', $resultTwo);
    }

    public function testMultipleOfFizeShouldReturnBizz()
    {
        $inputOne = 5;
        $inputTwo = 10;

        $resultOne = FizzBizz::EvaluateFizzBizz($inputOne);
        $resultTwo = FizzBizz::EvaluateFizzBizz($inputTwo);

        $this->assertEquals('Bizz', $resultOne);
        $this->assertEquals('Bizz', $resultTwo);
    }

    public function testMultipleOfThreeAndFiveShouldReturnFizzBizz()
    {
        $inputOne = 15;
        $inputTwo = 30;

        $resultOne = FizzBizz::EvaluateFizzBizz($inputOne);
        $resultTwo = FizzBizz::EvaluateFizzBizz($inputTwo);

        $this->assertEquals('FizzBizz', $resultOne);
        $this->assertEquals('FizzBizz', $resultTwo);
    }

    public function testShouldReturnInputedNumberOfNonFizzBizzNumber()
    {
        $inputOne = 1;

        $resultOne = FizzBizz::EvaluateFizzBizz($inputOne);

        $this->assertEquals($resultOne, $inputOne);
    }
}
