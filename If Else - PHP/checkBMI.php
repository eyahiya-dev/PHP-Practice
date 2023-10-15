<?php

/*

# BMI Calculator:- Develop a BMI (Body Mass Index) calculator that takes the user's weight (in kilograms) and height (in meters) as input. Use if-else statements to calculate and display their BMI category (underweight, normal weight, overweight, or obese).

*/

// weight must be in KG and height must be in meters

$weight = 65;
$height = 1.7;

$bmiCheck = $weight / ($height * $height);

if($bmiCheck < 18.5){
    echo "$bmiCheck and you're Underweight";
}elseif($bmiCheck >= 18.5 && $bmiCheck <= 24.9){
    echo "$bmiCheck and you're Normal";
}elseif($bmiCheck >= 25 && $bmiCheck <= 29.9){
    echo "$bmiCheck and you're Overweight";
}elseif($bmiCheck >= 30 && $bmiCheck <= 34.9){
    echo "$bmiCheck and you're Obese";
}elseif($bmiCheck > 35){
    echo "$bmiCheck and you're Extemely Obese";
}