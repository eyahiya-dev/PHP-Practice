<?php

/*

# Discount Calculator:- Build a PHP script for a shopping cart that calculates the final price based on the user's purchase amount. Apply a discount of 10% if the purchase amount is greater than $100.

*/

$amount = 3000;
$discountRate = 15;
$discountedPrice = ($discountRate * $amount) / 100;

if($amount >= 100){
    echo "You achived 10% discount.Your discounted credits is " . $discountedPrice . ". and you'll paid only " . $amount - $discountedPrice . " credits." ; 
}else{
    echo "Your're not eligable for Discount. You should shopping minimum 100 credits";
}