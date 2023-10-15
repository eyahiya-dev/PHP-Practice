<?php
/*
    # Age Classifier :- Write a PHP program that takes a user's age as input and uses if-else statements to classify the age into categories like child, teenager, adult, or senior citizen.
*/ 

 $age = 23;

 if( $age <= 0 ){
     echo "The age you provided does not exist in the world.";
 }elseif( $age > 0 && $age < 1 ){
    echo "You're in your mother fitas";
 }elseif( $age >= 1 && $age <= 7 ){
    echo "Your're a Child";
}elseif( $age > 7 && $age <= 18 ){
    echo "Your're a Teenager";
}elseif( $age > 18 && $age <= 49 ){
    echo "Your're an Adult Person";
}elseif( $age > 49 ){
    echo "Your're a Senior Citizen";
}