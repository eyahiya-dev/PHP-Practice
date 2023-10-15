<?php

/*

# Simple Calculator:-  Build a basic calculator that takes two numbers and an operator (+, -, *, /) as input from the user. Use if-else statements to perform the corresponding operation and display the result.

*/

$num1 = 6;
$num2 = 5;
$operator = " + " ;

if( $operator == " + " ){
    echo $num1 + $num2;
}elseif( $operator == " - " ){
    echo $num1 - $num2;
}elseif( $operator == " * "){
    echo $num1 * $num2;
}elseif( $operator == " / " ){
    echo $num1 / $num2;
}
