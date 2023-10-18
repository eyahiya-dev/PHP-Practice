<?php
// index array with [] order.

use function PHPSTORM_META\map;

$arrOnlyNumber = [1,2,3,4,5,6,7,8,9,10];
$arrWithKey = [
    "fIrstname" => "Yahya Mahmud",
    "eMail" => "yahya@yahoo.com",
];
// print_r($arrOnlyNumber);
// print_r($arrWithKey);

// array_change_key_case
$caseUpper = array_change_key_case($arrWithKey, CASE_UPPER);
$caseLower = array_change_key_case($arrWithKey, CASE_LOWER);

// print_r($caseUpper);
// print_r($caseLower);

// array_chunk
$arrChunk = array_chunk($arrOnlyNumber, 5);
// print_r($arrChunk);

// array_column
$ColmArray = [
    ['firstName'=> 'Yahya', 'lastName'=> 'Mahmud', 'age' => '23' ],
    ['firstName'=> 'Yahya', 'lastName'=> 'Mahmud', 'age' => '23' ],
    ['firstName'=> 'Yahya', 'lastName'=> 'Mahmud', 'age' => '23' ],
    ['firstName'=> 'Yahya', 'lastName'=> 'Mahmud', 'age' => '23' ],
    ['firstName'=> 'Yahya', 'lastName'=> 'Mahmud', 'age' => '23' ],
    ['firstName'=> 'Yahya', 'lastName'=> 'Mahmud', 'age' => '23' ],
    ['firstName'=> 'Yahya', 'lastName'=> 'Mahmud', 'age' => '23' ],
    ['firstName'=> 'Yahya', 'lastName'=> 'Mahmud', 'age' => '23' ]
];
$resultArrayColmn = array_column($ColmArray, 'lastName');
// print_r($resultArrayColmn);

// array_combine
$combineArrayKey = ['firstName', 'lastName'];
$combineArrayValue = ['Yahya', 'Mahmud'];

$combineResult = array_combine($combineArrayKey, $combineArrayValue);
// print_r($combineResult);


// array_count_values
$arrayCountValue = [
    'dog','cat','dog','hat','pet','cat'
];
$countValue = array_count_values($arrayCountValue);
// print_r($countValue);



// array_diff
$arrayDiffOne = [
    'cat','rat','hat','pet','dog','lock'
];
$arrayDiffTwo = [
    'cat','hat','pin','kite','kitty','lock'
];

$resultDiff = array_diff($arrayDiffOne, $arrayDiffTwo);
// print_r($resultDiff);


// array_diff_assoc
$arrDiffAss = [
    'name' => 'yahya', 'age' => '23', 'occupation' => 'student'
];

$arrDiffAss2 = [
    'name' => 'mahmud', 'lName'  => 'hasan', 'age' => '23'
];

$DiffAssoc = array_diff_assoc($arrDiffAss, $arrDiffAss2);
// print_r($DiffAssoc);


// array_map
$arrayMap = [1,2,3,4,5,6,7,];
$arrayMap2 = ['hello', 'welcome'];

function add($n){
    return ($n+1)*2;
}

function greeding($n){
    if($n === 'welcome'){
        return 'welcome to the world of php';
    }else{
        return $n . " world";
    }
}

$map = array_map('greeding',$arrayMap2);
// print_r($map);


// array_filter
$userInfo = [
    ['fName' => 'Yahya', 'lName' => 'Mahmud', 'age'=> '23', 'gender'=> 'male'],
    ['fName' => 'fahim', 'lName' => 'Hasan', 'age'=> '17','gender'=> 'male'],
    ['fName' => 'sumaiya', 'lName' => 'Akter', 'age'=> '20','gender'=> 'female'],
    ['fName' => 'Mahmuda', 'lName' => 'Akter', 'age'=> '21','gender'=> 'female'],
    ['fName' => 'Nazma', 'lName' => 'Akter', 'age'=> '29','gender'=> 'female'],
    ['fName' => 'Rabbani', 'lName' => 'Islam', 'age'=> '16','gender'=> 'male'],
];

function isMale($person){
    if($person['gender'] == 'male'){
        return true;
    }
    return false;
}
function isFemale($person){
    if($person['gender'] == 'female'){
        return true;
    }
    return false;
}

$isMale = array_filter($userInfo, 'isMale');
$isFemale = array_filter($userInfo, 'isFemale');

// print_r($isMale);
// print_r($isFemale);

// count of array
// in this section i'll use the array from top one.
$count = count($userInfo);
// print_r($count);

// array_product 
$arrayForProduct = [1,2,3,4,5,6];
$product = array_product($arrayForProduct);
// print_r($product);

// array_search
$info = [
    'fName' => 'yahya', 'lName' => 'mahmud', 'age'=> '23',    
];
$search = array_search('mahmud', $info);
// echo $search;
// array_search function always return the key's acording to value


//array_flip
$arrayFlip = ['a' => 'apple', 'b' => 'Ball'];
$flipArray = array_flip($arrayFlip);
// print_r($flipArray);
// array_flip always swipe key and value each other.

// array_merge
$arrMerg1 = [1,2,3,4,5,6];
$arrMerg2 = ['a','b','c'];
$arrMerg3 = ['yahya', 'mahmuda', 'fahim'];

$mergeArray = array_merge($arrMerg1, $arrMerg2, $arrMerg3);
// print_r($mergeArray);

