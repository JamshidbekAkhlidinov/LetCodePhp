<?php
class Solution {
    function converToBinary($number){
        $numbers = "";
        while($number > 0){
            $div = $number % 2;
            $numbers = $div.$numbers;
            $number = floor($number / 2);
        }
        return $numbers;
    }
    /**
     * @param String $date
     * @return String
     */
    function convertDateToBinary($date) {
        $dates = explode('-', $date);
        $list = [];
        foreach ($dates as $date){
            $list[] = $this->converToBinary($date);
        }
        return implode('-', $list);
    }
}
$obj = new Solution();
echo $obj->convertDateToBinary("2080-02-29")."\n";
echo $obj->convertDateToBinary("1900-01-01")."\n";