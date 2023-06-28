<?php
function findMedian($arr) {
    $a=count($arr);
    if(fmod($a,2)==1) {
        $a=$a-1;
    } else {
        $a=$a;
    }
    return $a/2;
}
$arr=array(1,2,3,4,5,6,7);
echo findMedian($arr);
?>
