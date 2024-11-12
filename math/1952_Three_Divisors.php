<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isThree($n) {
        $count = 0;
        for($i=1; $i<=$n; $i++) {
            if($n % $i == 0) {
                $count++;
                echo $i." ";
            }
        }
        return $count == 3;
    }
}

$obj = new Solution();
echo $obj->isThree(2)."\n";
echo $obj->isThree(4)."\n";