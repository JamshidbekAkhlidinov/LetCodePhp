<?php

class Solution {
    /**
     * @param Integer $num
     * @return Integer
     */
    function countDigits($num) {
        $numbers = str_split((string)$num);
        $count = 0;
        foreach ($numbers as $number){
            if((int)$num % $number == 0){
                $count ++;
                echo $number.", ";
            }
        }
        return $count;
    }
}

$obj = new Solution();
echo $obj->countDigits(7)."\n";
echo $obj->countDigits(121)."\n";
echo $obj->countDigits(1248)."\n";
