<?php
// Arithmetic Operation using Callback Function

// Add two numbers
function add($num1,$num2){
    echo $num1 + $num2;
}
// Substrac two numbers
function sub($num1, $num2){
    echo $num1 - $num2;
}
// Multiply two numbers
function multi($num1,$num2){
    echo $num1 * $num2;
}
// Devide two numbers
function div($num1,$num2){
    echo $num1 / $num2;
}

function arithOperarion($n1, $n2, $callBack){
    if(is_callable($callBack)){
        $callBack($n1, $n2);
    }else{
        echo "Sorry, $callBack is not callable";
    }
}

arithOperarion(10, 20, "div");
