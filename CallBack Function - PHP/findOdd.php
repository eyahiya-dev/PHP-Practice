<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,14,15,16,1464,454,63746,867,696,187];

function isOdd($n){
    if($n % 2 > 0){
        return true;
    }else{
        return false;
    }
}
$oddNumebrs = array_filter($numbers, "isOdd");
print_r($oddNumebrs);