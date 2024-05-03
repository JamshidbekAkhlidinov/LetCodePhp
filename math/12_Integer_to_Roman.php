<?php
//error_reporting

class Solution
{

    /**
     * @param Integer $num
     * @return String
     */

    public $list = [
        1 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
        5 => 'V',
        6 => 'VI',
        7 => 'VII',
        8 => 'VIII',
        9 => 'IX',
        10 => 'X',
        50 => 'L',
        100 => 'C',
        500 => 'D',
        1000 => 'M',
    ];

    function intToRoman($num)
    {
        $str = [];
        $sum = 0;
        $str_len = strlen((string)$num) - 1;
        $newValue = $num;
        $n = 0;
        while ($newValue > 0) {
            $d = $newValue % 10;
            $newValue = floor($newValue / 10);
            $m = $d * $this->degree($n);
            $n++;
            $sum += $m;

            print_r($m . "\n");
        }
        return $sum;
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

echo $obj->intToRoman(8876);