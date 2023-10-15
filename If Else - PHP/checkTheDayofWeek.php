<?php
/*

# Day of the Week:- Create a PHP program that prompts the user to enter a number from 1 to 7 and then displays the corresponding day of the week (e.g., 1 for Monday, 2 for Tuesday, etc.).

*/

$numberOfDay = 4;

if($numberOfDay == 1){
    echo "Monday";
}elseif($numberOfDay == 2){
    echo "Tuesday";
}elseif($numberOfDay == 3){
    echo "Wednesday";
}elseif($numberOfDay == 4){
    echo "Thursday";
}elseif($numberOfDay == 5){
    echo "Friday";
}elseif($numberOfDay == 6){
    echo "Satarday";
}elseif($numberOfDay == 7){
    echo "Sunday";
}else {
    echo "there is no other day in a week";
}