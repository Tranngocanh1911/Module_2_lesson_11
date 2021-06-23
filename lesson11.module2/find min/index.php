<?php
function findMin ($arr) {
    $min = $arr[0];
    for ($i = 0; $i < count($arr); ++$i) {
        if ($arr[$i] < $min){
            $min = $arr[$i];
        }
    }
    return $min;
}

$nums = [-2, 0, 5, 7, 9, -5, 30, 100];

foreach ($nums as $num) {
    echo $num . ' ';
}

$minValue = findMin($nums);
echo '<br>';
echo 'the minimum number is: '.$minValue;