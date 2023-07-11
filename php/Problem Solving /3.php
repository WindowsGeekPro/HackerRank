<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
    $a=[];
    $b="";
    $c="";
    $d="";
    $e="";
    $f=' ';
    $g=$n-1;
    for($i=0;$i<$n;$i++) {
        $b="#";
        $e.=$b;
        $c="\r\n";
        $d.=str_repeat($f,$g-$i).$e.$c;
    }
    print_r($d);
}

$n = intval(trim(fgets(STDIN)));

staircase($n);
?>
