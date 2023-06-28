<?php

function plusMinus($arr) {
    $c=count($arr);
    $a=0; // positive
    $b=0; // negative
    $d=0; // zero
    for($n0=0;$n0<$c;$n0++){
        if($arr[$n0]>0) { //positive
            $a=$a+1;
        } elseif($arr[$n0]<0) { // negative
            $b=$b+1;
        } else { // zero
            $d=$d+1;
        }
    }
    // finding ratio
    $e=round($a/$c,6).PHP_EOL; // positive
    $f=round($b/$c,6).PHP_EOL; // negative
    $g=round($d/$c,6).PHP_EOL; // zero
    // print results
    return $e.$f.$g;
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

echo plusMinus($arr);

?>
