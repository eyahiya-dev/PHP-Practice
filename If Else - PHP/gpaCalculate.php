<?php
/*

# Grade Point Average (GPA) Calculator:- Design a program that calculates a student's GPA based on inputted grades and credit hours. Use if-else conditions to assign grade points and compute the GPA.

*/

// using only GPA

$gpa = 2.5;

if($gpa > 5 || $gpa < 0){
    echo "Invalid GPA";
}elseif($gpa > 4 && $gpa <= 5){
    echo "A+";
}elseif($gpa > 3.5 && $gpa <= 4){
    echo "A";
}elseif($gpa > 3 && $gpa <= 3.5){
    echo "A-";
}elseif($gpa > 2 && $gpa <=3){
    echo "B";
}elseif($gpa > 1 && $gpa <=2){
    echo "C";
}elseif($gpa > 0 && $gpa < 1){
    echo "F";
}
