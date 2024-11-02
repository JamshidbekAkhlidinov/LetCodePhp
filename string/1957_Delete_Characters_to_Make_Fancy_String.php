<?php
//error
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function makeFancyString($s) {
        $new = [];
        for($i=0; $i<strlen($s); $i++){
            if((isset($s[$i-1]) and isset($s[$i+1]) and $s[$i+1]==$s[$i-1] and $s[$i+1]==$s[$i] and $s[$i]==$s[$i-1])){
                continue;
            }
            $new[] = $s[$i]; 
        }
      
        return implode($new);
    }
}

$obj = new Solution();
echo $obj->makeFancyString("leeetcode")."\n";
echo $obj->makeFancyString("aaabaaaa")."\n";
echo $obj->makeFancyString("aab")."\n";