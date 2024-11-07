<?php
class Solution {
    /**
     * @param Float $x
     * @return Integer
     */
    function mySqrt($x) 
    { 
        $orginal = $x;
        $tolerance = 0.000001;
        while(abs($orginal * $orginal - $x) > $tolerance){
            $orginal = ($orginal + $x /$orginal)/2;
        }
        return  floor($orginal);
    }
}
$obj = new Solution();
echo $obj->mySqrt(5)."\n";
echo $obj->mySqrt(8)."\n";
echo $obj->mySqrt(9)."\n";