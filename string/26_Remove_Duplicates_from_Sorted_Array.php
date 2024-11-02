<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $items = [];
        foreach ($nums as $n => $num) {
            $items[$num] = $num;
        }
        $nums = $items;
        return count($nums);    
    }
}

$obj = new Solution();
$nums = [1,1,2];
$result = $obj->removeDuplicates($nums);

echo $result;
