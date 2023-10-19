<?php
/*

Assignment 2: Sorting and Searching

* Create an array of random numbers.
* Sort the array in ascending order.
* Display the sorted array.
* Search for a specific number in the array and display whether it exists or not.

*/

// method 1

$randNum = [2,6,89,1,6,74,9,6,8,7,3,4,10,25,35,99,22,19,45];
$sortbyAscending = sort($randNum);
function inArray($n){
    global $randNum;
    if(in_array($n, $randNum)){        
        $numIndex = array_search($n, $randNum);
        return "Found.{$n} and index {$numIndex}"; //index is according to ascending order because we already use sort() function for ascending an array.
    }else{
        return "{$n}-Not found";
    }
}

// echo inArray(99);


// method 2

// here we use $randNum array and ascending sort also.
$findNum = 18;
$searchNum = array_search("{$findNum}", $randNum);
if($searchNum == true){
    echo "Found. {$findNum}";
}else{
    echo "Not Found- {$findNum}";
}
