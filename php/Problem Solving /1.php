<?php

$handle = fopen ("php://stdin", "r");

function solve($a0, $b0, $a1, $b1, $a2, $b2){
    // Complete this function
    $alice = 0;
    $bob = 0;

    if ($a0 > $b0) {
        $alice++;
    }

    if ($b0 > $a0) {
        $bob++;
    }
    
    if ($a1 > $b1) {
        $alice++;
    }

    if ($b1 > $a1) {
        $bob++;
    }
    
    if ($a2 > $b2) {
        $alice++;
    }

    if ($b2 > $a2) {
        $bob++;
    }
    return $alice.' '.$bob;
}

fscanf($handle, "%d %d %d", $a0, $a1, $a2);
fscanf($handle, "%d %d %d", $b0, $b1, $b2);
$result = solve($a0, $b0, $a1, $b1, $a2, $b2);
echo $result;

// ashumeow
?>
