<?php

/*

# Even or Odd Sum:- Ask the user to enter a series of numbers, and then use if-else conditions to calculate and display the sum of even and odd numbers separately.

*/

$num = 12;

if($num  == 0){
    echo "$num is Zero";
}elseif($num % 2 == 0){
    echo "$num is Even";
}else{
    echo "$num is Odd";
}