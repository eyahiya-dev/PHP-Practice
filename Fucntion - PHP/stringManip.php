<?php
/*

Assignment 5: Function with String Manipulation

* Create a function that takes a string as a parameter and returns the string reversed.
* Call the function with various strings and display the reversed strings.

*/

function strRever($text){
    if(strlen($text) > 0){
        return strrev($text);
    }else{
        return "Please enter Text";
    }
}

echo strRever("Mahmud");

