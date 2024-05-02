<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function scoreOfString($s)
    {
        $sum = 0;
        for ($i = 0; $i < strlen($s) - 1; $i++) {
            $one = abs(ord($s[$i]) - ord($s[$i + 1]));
            $sum += $one;
        }
        return $sum;
    }
}

$obj = new Solution();
$s = "hello";
print $obj->scoreOfString($s);