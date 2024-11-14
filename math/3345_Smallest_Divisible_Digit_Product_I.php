<?php

class Solution {
    /**
     * @param Integer $n
     * @param Integer $t
     * @return Integer
     */
    function smallestNumber($n, $t) {
        while(true){
            $numbers = str_split((string)$n);
            $sum  = 1;
            foreach($numbers as $number){
                $sum *= $number ;
            }
            if($sum % (int)$t == 0){
                return $n;
            }
            $n  = (int)$n + 1;
        }
        return $n;
    }
}

$obj = new Solution();
echo $obj->smallestNumber(10,2)."\n";
echo $obj->smallestNumber(15,3)."\n";