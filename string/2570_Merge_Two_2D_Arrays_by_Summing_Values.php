<?php

class Solution {

    /**
     * @param Integer[][] $nums1
     * @param Integer[][] $nums2
     * @return Integer[][]
     */
    function mergeArrays($nums1, $nums2) {
        $items = [];
        foreach($nums1 as $num => $values){
            $items[$values[0]] = $values[1];
        }
        foreach($nums2 as $num => $values){
            if(!isset($items[$values[0]])){
                $items[$values[0]] = 0; 
            }
            $items[$values[0]] += $values[1];
        }
        ksort($items);

        $data = [];
        foreach($items as $key=>$value){
            $data[] = [
                $key,
                $value
            ];
        }
        return $data;
    }
}

$obj = new Solution();
$nums1 = [[1,2],[2,3],[4,5]]; 
$nums2 = [[1,4],[3,2],[4,1]];

$res = $obj->mergeArrays($nums1, $nums2);

print_r($res);