<?php


class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $str  = str_split($s);
        $count1 = 0;
        $count2 = 0;
        $count3 = 0;
        $count4 = 0;
        $count5 = 0;
        $count6 = 0;
        foreach($str as $key => $val) {
            
            switch($key){
                case '{': $count1++;break;
                case '}': $count2++;break;
                case '[': $count3++;break;
                case ']': $count4++;break;
                case '(': $count5++;break;
                case ')': $count6++;break;
            }
        }
        return ($count1 == $count2) && ($count3 == $count4) && ($count5 == $count6);
    }
}

$obj = new Solution();
echo $obj->isValid("{[}]");