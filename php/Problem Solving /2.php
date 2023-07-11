<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */
function plusMinus($arr) {
    $a=0; // positive
    $b=0; // negative
    $c=0; // zero
    $d=count($arr);
    $e=0;
    for($i=0;$i<$d;$i++) {
        if($arr[$i]>0) {
            $a=$a+1;
        } else if($arr[$i]==0) {
            $c=$c+1;
        } else if($arr[$i]<0) {
            $b=$b+1;
        } else {
            // do nothing
        }
    }
    $a=round($a/$d,6).PHP_EOL;
    $b=round($b/$d,6).PHP_EOL;
    $c=round($c/$d,6).PHP_EOL;
    print_r($a.$b.$c);
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
?>
