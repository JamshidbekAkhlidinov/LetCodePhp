<?php

class Solution
{

    function converToBinary($number)
    {
        $numbers = "";
        while ($number > 0) {
            $div = $number % 2;
            $numbers = $div . $numbers;
            $number = floor($number / 2);
        }
        return $numbers;
    }

    function convertToTen($number, $from = 2)
    {
        $number2 = str_split(strrev($number));
        $number2 = array_map('intval', $number2);
        $sum = "0";
        foreach ($number2 as $i => $num) {
            $num2 = $num * pow($from, $i);
            $sum += $num2;
        }
        return $sum;
    }
    /**
     * @param Integer $num
     * @return Integer
     */
    function findComplement($num)
    {
        $binary = $this->converToBinary($num);
        $change = "";
        for ($i = 0; $i < strlen($binary); $i++) {
            if ($binary[$i] == 1) {
                $change .= 0;
            } else {
                $change .= 1;
            }
        }
        return $this->convertToTen($change);
    }
}


$obj = new Solution();
echo $obj->findComplement(5) . "\n";
echo $obj->findComplement(1) . "\n";
