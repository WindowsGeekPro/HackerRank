<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    $nn=count($arr);
    sort($arr);
    // max
    $mx=0;
    for($nm=1;$nm<$nn;$nm++) {
        $mx=$mx+$arr[$nm];
    }
    // min
    $mn=0;
    for($nm=0;$nm<$nn-1;$nm++) {
        $mn=$mn+$arr[$nm];
    }
    return $mn.' '.$mx;
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

echo miniMaxSum($arr);

?>
