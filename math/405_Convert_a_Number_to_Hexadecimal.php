<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function toHex($num) {
        $numbers = "";
        $list = [10=>'a', 11=>'b', 12=>'c', 13=>'d',14=>'e', 15=>'f'];
        while($num > 0){
            $div = $num % 16;
            if($div>=10){
                $div = $list[$div];
            }
            $numbers = $div.$numbers;
            $num = floor($num / 16);
        }
        return $numbers;
    }
}

$obj  = new Solution();
echo $obj->toHex(26)."\n";
echo $obj->toHex(-1)."\n";