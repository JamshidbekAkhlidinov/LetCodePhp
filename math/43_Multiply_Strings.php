<?php

class Solution
{

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function multiply($num1, $num2)
    {
        return bcmul($num1, $num2);
    }
}

$obj = new Solution();
echo $obj->multiply("123456789", "987654321") . "\n";