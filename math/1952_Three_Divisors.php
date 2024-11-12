<?php

class Solution {
    /**
     * @param Integer $n
     * @return Boolean
     */
    function isThree($n) {
        $count = 0;
        for($i=1; $i<=$n; $i++) {
            if((int)$n % $i == 0) {
                $count++;
                echo $i." ";
            }
            if($count>3){
                break;
            }
        }
        return $count == 3;
    }
}
$obj = new Solution();
echo $obj->isThree(2)."\n";
echo $obj->isThree(4)."\n";