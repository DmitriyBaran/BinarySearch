<?php

function BinarySearch($array, $search, $start, $end)
{
    if($start > $end)
    {
        return 'error';
    }

    $center = floor(($start + $end)/2);

    if($array[$center] == $search)
    {
        return $center;
    }
    elseif ($array[$center] > $search)
    {
        return BinarySearch($array, $search, $start, $center -1);
    }
    else
    {
        return BinarySearch($array, $search, $center + 1, $end);
    }
}

$array = [1,2,3,4,5,6,7,8,9,10];
$start = 0;
$end = count($array);
$search = 3;

echo BinarySearch($array, $search,$start, $end);