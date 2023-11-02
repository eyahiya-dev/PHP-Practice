<?php
/*
$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).

PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.

The example below shows how to use the super global variable $GLOBALS:
*/

//  Example

$name = "john doe";
$email = "ex@g.com";
$role = "admin";

function info(){
    $name = $GLOBALS['name'];
    $email = $GLOBALS['email'];
    $role = $GLOBALS['role'];

    return "Name : {$name} \n Email : {$email} \n Role : {$role} ";
}
// echo info();

// another example
$x = 2;
$y = 2;
$z = 2;

function average (){
    return $GLOBALS['avg'] = ($GLOBALS['x'] + $GLOBALS['y'] + $GLOBALS['z']) / 3;
}
echo average();