<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $frequencyList = []; 
        $halfCount = count($nums) / 2;
        foreach ($nums as $number) { 
            if (!isset($frequencyList[$number])) {
                $frequencyList[$number] = 0;
            }
            $frequencyList[$number] += 1;
            if ($frequencyList[$number] >= $halfCount) {
                return $number;
            }
        }
    }
}
$obj = new Solution();
echo $obj->majorityElement([3,2,3])."\n";
echo $obj->majorityElement([2,2,1,1,1,2,2])."\n";