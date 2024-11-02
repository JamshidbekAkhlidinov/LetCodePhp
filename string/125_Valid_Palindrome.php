<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = preg_replace("/[^a-zA-Z0-9]/", "", $s);
        $s = strtolower($s);
        $strlen = strlen($s);
        $isOne = $strlen % 2 == 1;

        $lengs = floor($strlen/2);
        $sub1 = substr($s, 0, $lengs);
        $sub2 = substr($s, $lengs + ($isOne), strlen($s));
        $sub2 = strrev($sub2);
        return $sub1==$sub2;
    }
}

$obj = new Solution();
echo $obj->isPalindrome("A man, a plan, a canal: Panama");