<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $items = [];
        foreach ($nums as $num){
            if(isset($items[$num])){
                $items[$num] += 1;
            } else {
                $items[$num] = 0;
            }
        }
        foreach ($items as $key => $value){
            if($value == 0){
                return $key;
            }
        }
    }
}

$obj = new Solution();
$nums = [2,2,1];
echo $obj->singleNumber($nums)."\n";
$nums = [4,1,2,1,2];
echo $obj->singleNumber($nums)."\n";
