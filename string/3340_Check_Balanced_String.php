<?php


class Solution {

    /**
     * @param String $num
     * @return Boolean
     */
    function isBalanced($num) {
        $list = str_split($num);
        $sumOdd = 0;
        $sumEven = 0;
        foreach($list as $i=>$num){
            if($i % 2 == 0){
                $sumEven+=$num;
            }else{
                $sumOdd += $num;
            }
        }
        return $sumEven == $sumOdd;
    }
}

$obj = new Solution();
echo $obj->isBalanced("1234")."\n";
echo $obj->isBalanced("24123")."\n";