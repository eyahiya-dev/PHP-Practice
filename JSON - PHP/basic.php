<?php
// encode json data
$associative_array = [
    "name" => "yahya mahmud",
    "email" => "yahay@gmail.com",
    "age" => "23",
];
$json1 = json_encode($associative_array);
// it'll return a json object if we use json_encode();

// multidimentional array
$associative_array2 = [
    ['name' => 'yahya','email'=> 'yahya@gmail.com'],
    ['name' => 'yahya','email'=> 'yahya@gmail.com'],
    ['name' => 'yahya','email'=> 'yahya@gmail.com'],
    ['name' => 'yahya','email'=> 'yahya@gmail.com'],
    ['name' => 'yahya','email'=> 'yahya@gmail.com'],
    ['name' => 'yahya','email'=> 'yahya@gmail.com'],
    ['name' => 'yahya','email'=> 'yahya@gmail.com'],
    ['name' => 'yahya','email'=> 'yahya@gmail.com'],
];

$json = json_encode($associative_array2);
// it'll return a json array
