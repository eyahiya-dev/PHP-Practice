<?php
// finding name using gender from array using callback and array funciton

$people = [
    ['name' => 'Yahya Mahmud', 'gender' => 'male'],
    ['name' => 'Terrescova', 'gender' => 'female'],
    ['name' => 'Velentina', 'gender' => 'female'],
    ['name' => 'Albert Pike', 'gender' => 'male'],
    ['name' => 'Anderson', 'gender' => 'male'],
    ['name' => 'Florencia', 'gender' => 'female'],
    ['name' => 'Himel Hasan', 'gender' => 'male'],
    ['name' => 'Goergia Hadson', 'gender' => 'female'],
    ['name' => 'Hasan Mahmud', 'gender' => 'male'],
    ['name' => 'Mahmuda', 'gender' => 'female']
];

// For male
function isMale($person){
    if($person['gender'] == 'male'){
        return true;
    }else{
        return false;
    }
}

// For female
function isFemale($person){
    if($person['gender'] == 'female'){
        return true;
    }else{
        return false;
    }
}

$isMale = array_filter($people, "isMale");
print_r($isMale);

$isFemale = array_filter($people, "isFemale");
print_r($isFemale);