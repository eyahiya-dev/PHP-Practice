<?php

/*

Positive, Negative, or Zero: Develop a program that asks the user to input a number and then determines whether the number is positive, negative, or zero using if-else statements.

*/

$number = -6;

if($number > 0){
    echo "$number is positive number";
}elseif($number == 0){
    echo "$number is Zero";
}else{
    echo "$number is Negative number";
}