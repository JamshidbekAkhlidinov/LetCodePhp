<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function minimumSum($num) {
        $split = str_split((string)$num);
        $list = []; $str = "";
        foreach($split as $key => $value) {
            $str.= $value;
            $list[] = $str;
        }
        print_r($list);
        return ;
    }
}

$obj = new Solution();
echo $obj->minimumSum(2932)."\n"; 
echo $obj->minimumSum(4009)."\n"; 