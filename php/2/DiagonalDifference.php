<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    $c=0;
    foreach($arr as $arr_c) {
        $c+=count($arr_c);
        // $c stores the number of multi-dimensional array elements present
    }
    // count number of columns
    $b=count(current($arr));
    // so what's the number of rows?
    $a=$c/$b;
    //
    // left-to-right diagonal
    // (3x3)
    // [0][0]
    // [1][1]
    // [2][2]
    //
    $k=0;
    for($i=0;$i<$a;$i++) {
        for($j=0;$j<$b;$j++) {
            $k=$k+$arr[$i][$j];
        }
    }
    //
    // right-to-left diagonal
    // (3x3)
    // [0][2]
    // [1][1]
    // [2][0]
    //
    $l=0;
    // subtract by 1 as the array registry begins from zero
    $d=$b-1;
    for($i=0;$i<$a;$i++) {
        for($j=$d;$j>0;$j--) {
            $l=$l+$arr[$i][$j];
        }
    }
    return $k-$l;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
?>
