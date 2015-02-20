<?php

use App\FizzBizz;

include_once('app\FizzBizz.php');

class FizzBizzTest extends \PHPUnit_Framework_TestCase
{

    public function testMultipleOfThreeShouldReturnFizz()
    {
        $inputOne = 3;
        $inputTwo = 6;

        $resultOne = FizzBizz::EvaluateFizzBizz($inputOne);
        $resultTwo = FizzBizz::EvaluateFizzBizz($inputTwo) == 'Fizz';

        $this->assertTrue($resultOne == 'Fizz');
        $this->assertTrue($resultTwo == 'Fizz');
    }

    public function testMultipleOfFizeShouldReturnBizz()
    {
        $inputOne = 5;
        $inputTwo = 10;

        $resultOne = FizzBizz::EvaluateFizzBizz($inputOne);
        $resultTwo = FizzBizz::EvaluateFizzBizz($inputTwo);

        $this->assertTrue($resultOne == 'Bizz');
        $this->assertTrue($resultTwo == 'Bizz');
    }

    public function testMultipleOfThreeAndFiveShouldReturnFizzBizz()
    {
        $inputOne = 15;
        $inputTwo = 30;

        $resultOne = FizzBizz::EvaluateFizzBizz($inputOne);
        $resultTwo = FizzBizz::EvaluateFizzBizz($inputTwo);

        $this->assertTrue($resultOne == 'FizzBizz');
        $this->assertTrue($resultTwo == 'FizzBizz');
    }

    public function testShouldReturnInputedNumberOfNonFizzBizzNumber()
    {
        $inputOne = 1;

        $resultOne = FizzBizz::EvaluateFizzBizz($inputOne);

        $this->assertTrue($resultOne == $inputOne);
    }
}
