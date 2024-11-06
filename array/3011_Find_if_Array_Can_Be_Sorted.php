<?php

class Solution {

    function countSetBits($num) {
        return substr_count(decbin($num), '1');
    }
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canSortArray($nums) {
    $groups = [];
    foreach ($nums as $num) {
        $setBits = $this->countSetBits($num);
        if (!isset($groups[$setBits])) {
            $groups[$setBits] = [];
        }
        $groups[$setBits][] = $num;
    }

    foreach ($groups as $key => $group) {
        sort($groups[$key]);
    }

    $sortedNums = [];
    foreach ($nums as $num) {
        $setBits = $this->countSetBits($num);
        $sortedNums[] = array_shift($groups[$setBits]);
    }

    $expectedSorted = $nums;
    sort($expectedSorted);

    return $sortedNums === $expectedSorted;
    }
}


$obj = new Solution();
$nums = [8,4,2,30,15];
echo $obj->canSortArray($nums)."\n";
// $nums = [1,2,3,4,5];
// echo $obj->canSortArray($nums)."\n";
// $nums = [3,16,8,4,2];
// echo $obj->canSortArray($nums)."\n";