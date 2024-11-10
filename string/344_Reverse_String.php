<?php

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $str = [];
        $count = count($s);
        for($i=$count; $i > 0; $i--){
            $str[] = $s[$i-1];
        }
        $s = $str;
    }
}

$obj = new Solution();
$data = ["h","e","l","l","o"];
$obj->reverseString($data);
print_r($data);