<?php
/*

# Leap Year Checker:- Design a program that checks if a given year is a leap year or not based on user input. Leap years are divisible by 4, but if they are also divisible by 100, they must also be divisible by 400.

*/


$year = 2037;

if( $year % 400 == 0 ){
    echo "Oh yess! $year is leap year";
}elseif( $year % 100 == 0 ){
    echo "Oh yess! $year is leap year";
}elseif( $year % 4 == 0){
    echo "Oh yess! $year is leap year";
}else {
    echo "OHH No. $year is not leap year";
}