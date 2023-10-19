<?php
/*

Assignment 3: Unique Values

* Create an array with duplicate values.
* Write a function to remove duplicates and return a new array with unique values.
* Display the original and unique arrays.

*/

// Method 1. Creating Function

$array = ['yahya', 'mahmud', 'yahya', 10 , 10, 20, 10, 50, 19, 5, 10, 'fahim'];

function removeDuplicate ($arr){    
    $uniqArray = array_unique($arr);
    return $uniqArray;
}

$uniqArray = removeDuplicate($array);

// print_r($uniqArray);


// Method 2. Using build in function.
$array2 = ['John', 'mahmud', 'Doe', 10 , 10, 20, 'John', 50, 19, 5, 10, 'fahim', 'Doe'];
$uniqArray2 = array_unique($array2);
// print_r($uniqArray2);