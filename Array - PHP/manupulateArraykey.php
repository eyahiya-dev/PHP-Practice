<?php
/*

Assignment 10: Manipulating Array Keys

* Create an indexed array of months with numeric keys starting from 1.
* Use a loop to display the month names alongside their corresponding numeric keys.

*/

$months = [
    1=> "Januaray",
    2=> "February",
    3=> "March",
    4=> "April",
    5=> "May",
    6=> "June",
    7=> "July",
    8=> "August",
    9=> "September",
    10=> "October",
    11=> "November",
    12=> "December"
];
foreach ($months as $key => $month){
    echo "{$key} : {$month}" . PHP_EOL;
}