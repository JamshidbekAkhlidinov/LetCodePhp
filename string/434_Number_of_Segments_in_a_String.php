<?php
class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function countSegments($s) {
        $s = trim($s);
        if(!strlen($s)){
            return 0;
        }
        $data = explode(" ",$s);
        $count = 0;
        foreach($data as $symbol){
            if(strlen(trim($symbol))){
                $count++;
            }
        }
        return $count;
    }
}

$obj = new Solution();
echo $obj->countSegments("Hello, my name is John")."\n";
echo $obj->countSegments(" ")."\n";
echo $obj->countSegments(", , , ,        a, eaefa")."\n";
