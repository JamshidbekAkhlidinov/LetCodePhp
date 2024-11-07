<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        foreach ($nums as $i=>$num){
            if($nums[count($nums)-1] < $target){
                return count($nums);
            }
            if($num==$target){
                return  $i;
            }
            if($nums[$i] < $target && $nums[$i+1] > $target){
                return $i+1;
            }
        }
        return 0;
    }
}

$obj = new Solution();
$nums = [1,3,5,6]; $target = 4;

echo $obj->searchInsert($nums, $target);