<?php
class Solution
{
    function convertToTen(String $number, $from = 2)
    {
        $number2 = str_split(strrev($number));
        $number2 = array_map('intval', $number2);
        $sum = "0";
        foreach ($number2 as $i => $num) {
            $num2 = bcmul($num, bcpow($from,$i));
            $sum  = bcadd($num2,$sum);           
        }
        return $sum;
    }
    function converToTwo(String $number, $to=2){
        $str = "";
        while($number >= $to){
            $str = bcmod($number, $to) . $str;
            $number = bcdiv( $number, $to);
        }
        return $number.$str;
    }
    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b)
    {
        $a = $this->convertToTen($a);
        $b = $this->convertToTen($b);
        $sum = bcadd($a, $b);
        return $this->converToTwo($sum);;
    }
}
$obj = new Solution();
echo $obj->addBinary(11, 1) . "\n";
echo $obj->addBinary(1010, 1011) . "\n";
echo $obj->addBinary(
    "10100000100100110110010000010101111011011001101110111111111101000000101111001110001111100001101", 
    "110101001011101110001111100110001010100001101011101010000011011011001011101111001100000011011110011"
) . "\n";
