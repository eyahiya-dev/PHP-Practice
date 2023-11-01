<?php
//  if you want to code with session, you should start session firts with session_start() function;
session_start();
$inputName = "yahya";
$inputemail = "yahya@gmail.com";
$inputrole = "admin";

$name = $_SESSION["userName"] = $inputName;
$email = $_SESSION["email"] = $inputemail;
$role = $_SESSION["role"] = $inputrole;

echo $name;
echo $email;
echo $role;