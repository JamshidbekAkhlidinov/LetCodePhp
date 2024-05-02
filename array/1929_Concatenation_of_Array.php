<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums)
    {
        return array_merge($nums, $nums);
    }
}


$obje = new Solution();
$nums = [1, 2, 1];
print_r($obje->getConcatenation($nums));