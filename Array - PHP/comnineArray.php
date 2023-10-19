<?php
/*

Assignment 8: Combining Arrays

* Create two arrays, one with names of fruits and another with names of vegetables.
* Combine the arrays into a single array representing a grocery list.
* Display the merged grocery list.

*/
// Array of fruits
$fruits = array(
    "Apple",
    "Banana",
    "Orange",
    "Strawberry",
    "Grapes",
    "Watermelon",
    "Mango",
    "Pineapple",
    "Kiwi",
    "Cherry"
);

// Array of vegetables
$vegetables = array(
    "Carrot",
    "Broccoli",
    "Spinach",
    "Tomato",
    "Cucumber",
    "Bell Pepper",
    "Lettuce",
    "Zucchini",
    "Cabbage",
    "Eggplant"
);

$groceryList = array_merge($fruits, $vegetables);
print_r($groceryList);