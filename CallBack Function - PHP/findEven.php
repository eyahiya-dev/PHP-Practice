<?php
// check odd even using callback function with array filter();

$numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

function isEven($n){
    if($n % 2 == 0){
        return 1;
    }else{
        return 0;
    }
}
$evenNumebrs = array_filter($numbers, "isEven");
// print the value
print_r($evenNumebrs);