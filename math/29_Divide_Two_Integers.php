<?php

class Solution
{

    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    function divide($dividend, $divisor)
    {
        $result = intval($dividend/$divisor);
        $max_limit = pow(2,31);
        if($result >= $max_limit){
            return ($max_limit -1);
        }
        return $result;
    }
}

$obj = new Solution();

print_r($obj->divide(-2147483648, -1) . "\n");
print_r($obj->divide(-2147483648, 1) . "\n");
print_r($obj->divide(10, 3) . "\n");
print_r($obj->divide(10, -3) . "\n");
print_r($obj->divide(-2147483648, -3) . "\n");

