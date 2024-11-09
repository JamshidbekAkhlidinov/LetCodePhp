<?php

class Solution {

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $sysmbols = str_split($columnTitle);
        $sum = 0;
        foreach ($sysmbols as $sysmbol){
            $value = ord($sysmbol) - 64;
            $sum = $sum * 26 + $value;
        }
        return $sum; 
    }
}

$obj = new Solution();
echo $obj->titleToNumber("A")."\n";
echo $obj->titleToNumber("Z")."\n";
echo $obj->titleToNumber("AB")."\n";
echo $obj->titleToNumber("ACD")."\n";
echo $obj->titleToNumber("ZY")."\n";
echo $obj->titleToNumber("DK")."\n";

