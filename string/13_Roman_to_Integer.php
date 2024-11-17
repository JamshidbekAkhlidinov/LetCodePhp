<?php

class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $list = [
            1000 => 'M', 900 => 'CM', 500 => 'D', 400 => 'CD',
            100 => 'C', 90 => 'XC', 50 => 'L', 40 => 'XL',
            10 => 'X', 9 => 'IX', 5 => 'V', 4 => 'IV', 1 => 'I'
        ];
        $list = array_flip($list);
        $value  = 0;
        for($i = 0; $i < strlen($s); $i++) {
            if(isset($s[$i+1]) && isset($list[$s[$i].$s[$i+1]])){
                $value +=$list[$s[$i].$s[$i+1]];
                $i++;
            }else {
                $value += $list[$s[$i]];
            }
        }
        return  $value;
    }
}
$obj = new Solution();
echo $obj->romanToInt("III")."\n";
echo $obj->romanToInt("LVIII")."\n";
echo $obj->romanToInt("MCMXCIV")."\n";