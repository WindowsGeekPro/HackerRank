<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    sort($arr);
    $a=0;
    $a=count($arr);
    $b=0;
    $c=0;
    // min
    for($i=0;$i<$a-1;$i++) {
        $b=$arr[$i];
        $c=$c+$b;
    }
    $d=0;
    $e=0;
    // max
    for($j=1;$j<$a;$j++) {
        $d=$arr[$j];
        $e=$e+$d;
    }
    echo $c.' '.$e;
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

//
// ashumeow
//
?>
