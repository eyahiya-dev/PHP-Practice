<?php
/*

# Number Comparison:- Create a PHP script that compares two numbers entered by the user and displays whether the first number is greater than, less than, or equal to the second number.

*/

$numOne = 13;
$numTwo = 15;

if ( $numOne == $numTwo) {
    echo "$numOne and $numTwo is Equal";
}elseif( $numOne > $numTwo ){
    echo "$numOne is greater than $numTwo";
}elseif( $numOne < $numTwo ){
    echo "$numOne is Less than $numTwo";
}