<?php

//error

class Solution {

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target) {
        // $items = [];
        // foreach ($candidates as $candidate) {
        //     foreach ($candidates as $candidate2) {
        //         if($candidate + $candidate2 == $target){
        //             $items[] = [$candidate,$candidate2];
        //         }
        //     }
        // }
        // return $items;
    }
}


$obj = new Solution();
$candidates = [2,3,6,7]; $target = 7;
print_r($obj->combinationSum($candidates, $target));
