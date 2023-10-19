<?php
/*

Assignment 9: Sum and Average

* Create an array of random numbers.
* Calculate and display the sum of all the numbers in the array.
* Calculate and display the average of the numbers.

*/

// using only array function
$numbers = [1,2,3,4,5,6,7,8,9,10];
$sumofArray = array_sum($numbers);
// print_r($sumofArray);
// find average of array
$countElement = count($numbers);
$averageOfarray = $sumofArray / $countElement;
// print_r($averageOfarray);