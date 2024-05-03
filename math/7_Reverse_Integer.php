<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        $border = $this->degree(31, 2);

        if (-$border <= $x && $x <= $border - 1) {
            $sum = 0;
            $oldValue = $x;
            $newValue = abs($x);
            $len = strlen((string)$newValue) - 1;
            while ($newValue >= 10) {
                $d = $newValue % 10;
                $newValue = floor($newValue / 10);
                $sum += $d * $this->degree($len);
                $len--;
            }

            $sum += $newValue;
            if ($oldValue < 0) {
                $sum = -$sum;
            }

            if (-$border <= $sum && $sum <= $border - 1) {
                return $sum;
            }
            return 0;
        }
        return 0;

    }

    function degree($len, $number = 10): int
    {
        $sum = 1;
        for ($i = 0; $i < $len; $i++) {
            $sum *= $number;
        }
        return $sum;
    }
}

$obj = new Solution();
print_r($obj->reverse(-10) . "\n");
print_r($obj->reverse(10) . "\n");
print_r($obj->reverse(-3331232) . "\n");
print_r($obj->reverse(1534236469) . "\n");
print_r($obj->reverse(-2147483648) . "\n");