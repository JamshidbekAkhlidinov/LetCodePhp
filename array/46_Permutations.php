<?php

//tayyor emas
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $items = [];
        foreach ($nums as $num){
            $data = [];
            foreach ($nums as $num2){
                $data[] = $num2;
            }
            $items[] = $data;
        }
        return $items;
    }
}

$obj = new Solution();
$nums = [1,2,3];
$res =  $obj->permute($nums);

print_r($res);