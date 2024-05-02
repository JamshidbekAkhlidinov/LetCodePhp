<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n)
    {
        $items = [];
        $array = array_slice($nums, $n);
        for ($i = 0; $i < $n; $i++) {
            $items[] = $nums[$i];
            $items[] = $array[$i];
        }
        return $items;
    }
}

$nums = [2, 5, 1, 3, 4, 7];
$n = 3;

$obj = new Solution();
print_r($obj->shuffle($nums, $n));