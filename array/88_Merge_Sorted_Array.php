<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $count = (int)$m;
        foreach($nums2 as $num){
            $nums1[$count] = $num;
            $count++;
        }
        sort($nums1);
    }
}

$obj = new Solution();
$nums1 = [1,2,3,0,0,0]; $m = 3; $nums2 = [2,5,6]; $n = 3;
$obj->merge($nums1,$m,$nums2,$n);
print_r($nums1);
