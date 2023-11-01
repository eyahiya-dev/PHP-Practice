<?php
/*

What is JSON?
JSON stands for JavaScript Object Notation
JSON is a lightweight data interchange format
JSON is language independent *
JSON is "self-describing" and easy to understand
* The JSON syntax is derived from JavaScript object notation syntax, but the JSON format is text only. Code for reading and generating JSON data can be written in any programming language.

#refrence - W3 School.



Example of JSON.

{
    "employees":[
      {"firstName":"John", "lastName":"Doe"},
      {"firstName":"Anna", "lastName":"Smith"},
      {"firstName":"Peter", "lastName":"Jones"}
    ]
}

*/

// JSON in PHP, Json containd object , this object is called associative array in PHP

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $info = [
        "userName"=> "yahya mahmud",
        "email"=> "yahya@gmail.com",
        "age"=> "23",
    ];
    
    $jsonEncode = json_encode($info);
    echo "success";

}

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $jsonMain = file_get_contents("php://input");
    $jsonDecode = json_decode($jsonMain,true);
    print_r($jsonDecode);
}