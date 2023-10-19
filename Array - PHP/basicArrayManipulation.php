<?php
/*

Assignment 1: Basic Array Manipulation

* Create an array of your favorite colors.
* Display the first and last elements of the array.
* Add a new color to the array.
* Remove an existing color from the array.
* Display the updated array.

*/

// use array_push function for add element in a array.

$colors = ['green', 'yellow', 'red', 'black', 'aqua', 'blue'];
// array_push for adding element in array
$addColor = array_push($colors,'purple', 'rose blue');
// print_r($addColor);

// array_pop for remove last element from an array
$removeColor = array_pop($colors);
// print_r($removeColor);
// print_r($colors);