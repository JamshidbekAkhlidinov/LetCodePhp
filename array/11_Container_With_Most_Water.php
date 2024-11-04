<?php
//xato
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
    //    $one = $height[0];
    //    $two = $height[$one];
    //     $three = $height[$two];

    //    return $two * $three;
    }
}

$obj = new Solution();
$height = [1,8,6,2,5,4,8,3,7];
echo $obj->maxArea($height)."\n";
$height = [1,2,1];
echo $obj->maxArea($height)."\n";