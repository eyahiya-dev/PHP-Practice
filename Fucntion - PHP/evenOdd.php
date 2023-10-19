<?php
/*

Assignment 2: Function with Conditional Logic

* Create a function that takes an integer as a parameter and returns "Even" if the number is even and "Odd" if it's odd.
* Call the function with different numbers and display the results.

*/

function checkEvenOdd($n){
    if ($n == 0) {
        return "Zero";
    }elseif ($n %2 == 0) {
        return "{$n} is Even";
    }else{
        return "{$n} is Odd";
    }
}

echo checkEvenOdd(9) . PHP_EOL;
echo checkEvenOdd(8) . PHP_EOL;
echo checkEvenOdd(18646) . PHP_EOL;
echo checkEvenOdd(936517) . PHP_EOL;
echo checkEvenOdd(413436) . PHP_EOL;