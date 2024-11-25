<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function maximumOddBinaryNumber($s) {
        $list1 = [];
        $list0 = [];
        for ($i = 0; $i < strlen($s);$i++){
            if($s[$i]==0){
                $list0[] = 0;
            } else {
                $list1[] = 1;
            }
        }
        unset($list1[0]);
        return implode($list1).implode($list0) . 1;
    }
}

$obj  = new Solution();
echo $obj->maximumOddBinaryNumber("010") . "\n"; // Output: "001"
echo $obj->maximumOddBinaryNumber("00110") . "\n"; // Output: "10001"