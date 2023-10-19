<?php
/*

Assignment 2: Array Indexing

Create an indexed array containing the days of the week.
Display the day that corresponds to a user-input index (e.g., 0 for Sunday, 1 for Monday, etc.).
Handle cases where the user enters an invalid index.

*/

$daysOfWeek = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'satarday'];
$countOfIndex = count($daysOfWeek);
function findDay($index)
{
    global $countOfIndex, $daysOfWeek;
    if ($index >= 0 && $index < $countOfIndex) {
        $selectedDay = $daysOfWeek[$index];
        return $selectedDay;
    } else {
        return "Invalid";
    }
}

echo findDay("6");