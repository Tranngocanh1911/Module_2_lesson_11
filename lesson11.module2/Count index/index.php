<?php
function countIndex($arr, $value): int
{
    $count = 0;
    for ($i = 0; $i < count($arr); ++$i){
        if ($arr[$i] === $value){
            $count++;
        }
    }
    return $count;
}

$numbers = [14,36,57,29,14,69,100,39,19,14];

foreach ($numbers as $num){
    echo $num . ' ';
}

$indexFound = countIndex($numbers, 14);

echo'<br>';
echo 'The number of time 14 show up in this array is: '. $indexFound;