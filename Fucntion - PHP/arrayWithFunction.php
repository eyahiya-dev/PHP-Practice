<?php
/*

Assignment 4: Function with Array

* Create a function that accepts an array of numbers and returns their sum.
* Call the function with different arrays and display the results

*/

function arraySum ($numbers){
    $sum = 0;
    foreach($numbers as $number){
        $sum += $number;
    }
    return $sum;
}
echo arraySum([1,2,3,4]);