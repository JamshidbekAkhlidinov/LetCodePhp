<?php

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minElement($nums) {
        $sum = [];
        foreach ($nums as $num){
            $str = str_split($num);
            $sum[] = array_sum($str);
        }
        return min($sum);
    }
}
$obj = new Solution();
echo $obj->minElement([10,12,13,14])."\n";
echo $obj->minElement([999,19,199])."\n";
