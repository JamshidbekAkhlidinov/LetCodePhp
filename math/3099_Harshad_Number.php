<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function sumOfTheDigitsOfHarshadNumber($x) {
        $x = abs((int)$x);
        $numbers = str_split((string)$x);
        $sum = array_sum($numbers);
        if((int)$x % $sum == 0){
            return $sum;
        }
        return -1;
    }
}

$obj = new Solution();

echo $obj->sumOfTheDigitsOfHarshadNumber(18)."\n";
echo $obj->sumOfTheDigitsOfHarshadNumber(23)."\n";