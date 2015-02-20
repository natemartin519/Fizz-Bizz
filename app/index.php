<?php

use App\FizzBizz;

include_once('FizzBizz.php');

for ($x = 1; $x <= 100; $x++) {
    echo FizzBizz::EvaluateFizzBizz($x) . '<br>';
}