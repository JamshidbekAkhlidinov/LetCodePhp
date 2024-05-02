<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
        $item = [];
        foreach ($nums as $num){
            $item[] = $nums[$num];
        }
        return $item;
    }
}

$obj = new Solution();
$nums  = [0,2,1,5,3,4];
print_r($obj->buildArray($nums));