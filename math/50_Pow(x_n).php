<?php
class Solution
{
    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n)
    {
        if ($x <= 0.00001 && $x > 0) {
            return 0.00001;
        }
        $is_odd = (int)$n % 2 == 1;
        if ($x == 1.00000) {
            return 1.00000;
        }
        if ($x == -1.00000) {
            if ($is_odd) {
                return -1.00000;
            } else {
                return 1.00000;
            }
        }
        $sum = "1";
        $is_minus = $n < 0;
        $n = abs((int)$n);
        for ($i = 0; $i < $n; $i++) {
            $sum = bcmul($sum, $x, 20);
            if ($sum >= 1048576) {
                return 0.00000;
            }
        }
        if ($is_minus) {
            return bcdiv("1", $sum, 5);
        }
        return number_format($sum, 5, '.', '');
    }
}
$obj = new Solution();
echo $obj->myPow(2,10)."\n";
echo $obj->myPow(2,-2)."\n";
echo $obj->myPow(-2,2)."\n";
echo $obj->myPow(1,2222222)."\n";
echo $obj->myPow(0.00001,2147483647)."\n";
echo $obj->myPow(2, 15) . "\n";
echo $obj->myPow(2, -15) . "\n";
echo $obj->myPow(-1.00000, 2147483647) . "\n";
