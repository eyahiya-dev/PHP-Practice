<?php
/*

Assignment 4: Associative Arrays

* Create an associative array that represents a person's information, including name, age, and email.
* Display each piece of information using key-value pairs.

*/

$personalInfo = [
    "fName"=> "Yahya", "lName" => "Mahmud", "email" => "yahya@yahoo.com", "age" => "23",
];
echo $personalInfo['fName'] . PHP_EOL;
echo $personalInfo['lName'] . PHP_EOL;
echo $personalInfo['email'] . PHP_EOL;
echo $personalInfo['age'] . PHP_EOL;
