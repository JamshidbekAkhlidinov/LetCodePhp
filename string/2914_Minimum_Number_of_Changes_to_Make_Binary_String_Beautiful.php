<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function minChanges($s) {
        $leng  = strlen($s);
        $count1 = 0;
        $count2 = 0;
        for($i=0;$i<$leng;$i++) {
            if($s[$i]==1){
                $count1++;
            }else{
                $count2++;
            }    
        }
       return abs($count1- $count2);
    }
}

$obj = new Solution();
echo $obj->minChanges("10")."\n";
echo $obj->minChanges("0")."\n";
echo $obj->minChanges("0000")."\n";
echo $obj->minChanges("11000111")."\n";