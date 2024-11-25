<?php

class Solution {

    /**
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function countSymmetricIntegers($low, $high) {
        $count = 0;
        if($low < 10){
            $low = 10;
        }
        for ($i = $low; $i <= $high; $i++) {
            $s = (string)$i;
            $strlen = strlen($s);
            if($strlen %2 == 1){
                $i += 1;
                continue;
            }
            $left = 0;
            $right = 0;
            
            for($j = 0; $j < $strlen; $j++){
                if($strlen / 2 > $j){
                    $left += $s[$j];
                }else{
                    $right += $s[$j];
                }
            }
            
            if($left==$right){
                $count++;
                echo $i." ";
            }
        }
        return $count;
    }
}

$obj = new Solution();
echo $obj->countSymmetricIntegers(1, 100)."\n";
echo $obj->countSymmetricIntegers(1200, 1230)."\n";