<?php namespace App;

class FizzBizz
{
    public static function EvaluateFizzBizz($inputValue)
    {
        if ($inputValue % 3 == 0 && $inputValue % 5 == 0) {
            return 'FizzBizz';
        } elseif ($inputValue % 3 == 0) {
            return 'Fizz';
        } elseif ($inputValue % 5 == 0) {
            return 'Bizz';
        }

        return $inputValue;
    }
}