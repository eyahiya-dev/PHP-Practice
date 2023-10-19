<?php
/*

Assignment 6: Filtering and Mapping

* Create an array of numbers.
* Filter out even numbers into a new array.
* Use the array_map function to square each number in the array.
* Display both the filtered and mapped arrays.

*/

$numArr = [1,2,3,4,5,6,25,24];

function isOdd($num) {
    $oddNum = $num % 2 !== 0;
    return $oddNum;
}

function isEven($num){
    $evenNum = $num % 2 === 0;
    return $evenNum;
}

// Filtering using array_filter fucntion
$odd = array_filter($numArr, 'isOdd');
$even = array_filter($numArr,'isEven');


function square($n){
    return $n * $n;
}

// use the array_map function for squaring the value
$squareOfOdd = array_map('square', $odd);
$squareOfEven = array_map('square', $even);

print_r($squareOfOdd);
print_r($squareOfEven);