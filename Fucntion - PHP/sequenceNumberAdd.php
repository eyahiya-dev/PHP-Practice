<?php

/*
    # Adding Sequence Numeber
*/

function addSequence($startNumber, $endNumebr){
    $total = 0;
    for ($startNumber; $startNumber <= $endNumebr; $startNumber++ ){
            $total += $startNumber;
    }
    return $total;
}
echo addSequence(2,10);

