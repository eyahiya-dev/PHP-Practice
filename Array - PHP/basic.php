<?php
// index array with [] order.
$arrOnlyNumber = [1,2,3,4,5,6,7,8,9,10];
$arrWithKey = [
    "fIrstname" => "Yahya Mahmud",
    "eMail" => "yahya@yahoo.com",
];

// array_change_key_case
$caseUpper = array_change_key_case($arrWithKey, CASE_UPPER);
$caseLower = array_change_key_case($arrWithKey, CASE_LOWER);

// array_chunk
$arrChunk = array_chunk($arrOnlyNumber, 5);

// 