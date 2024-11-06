<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if($n < 2){
            return $n;
        }
        $a = 1;
        $b = 2;
        for($i=3; $i<=$n; $i++){
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
        return $b;
    }
}

$obj = new Solution();
$res =  $obj->climbStairs(1);

print_r($res);