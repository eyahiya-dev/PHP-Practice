<?php
/*

Assignment 3: Function with Default Parameter

* Create a function that takes a name as a parameter and displays a greeting message with that name.
* If no name is provided, use a default name like "Guest."

*/

function greeting(string $name){
    if($name){
        return "Hey! {$name}. Welcome to the world of PHP Programming.";
    }else{
        return "Hey! Guest. Please Enter Your Name.";
    }
}

echo greeting("Yahya") . PHP_EOL;
echo greeting("") . PHP_EOL;
echo greeting("Jahid") . PHP_EOL;
echo greeting("") . PHP_EOL;
