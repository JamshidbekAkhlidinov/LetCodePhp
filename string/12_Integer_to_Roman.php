<?php

class Solution {
    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        $list = [
            1000 => 'M', 900 => 'CM', 500 => 'D', 400 => 'CD',
            100 => 'C', 90 => 'XC', 50 => 'L', 40 => 'XL',
            10 => 'X', 9 => 'IX', 5 => 'V', 4 => 'IV', 1 => 'I'
        ];
        $numbers = [];
        foreach ($list as $number=>$symbol){
            while ($num >= $number){
                $numbers[] = $symbol;
                $num -=$number;
            }
        }
        return implode($numbers);
    }
}
$obj = new Solution();
echo $obj->intToRoman(3749)."\n";
echo $obj->intToRoman(58)."\n";
echo $obj->intToRoman(1994)."\n";