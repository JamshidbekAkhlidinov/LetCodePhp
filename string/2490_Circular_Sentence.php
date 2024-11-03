<?php

class Solution {

    /**
     * @param String $sentence
     * @return Boolean
     */
    function isCircularSentence($sentence) {

        $items = explode(' ', $sentence);

        if(count($items) == 1){
            return substr($sentence,-1)==substr($sentence,0,1);
        }

        $count = 0;
        foreach ($items as $key=>$item) {
            if(isset($items[$key+1][0]) && substr($item,-1)==$items[$key+1][0]){
                $count++;
            }
        }

        return $count == count($items) - 1 && substr($sentence,-1) == substr($sentence,0,1);
    }
}

$obj = new Solution();
echo $obj->isCircularSentence("Leetcode eisc cool");