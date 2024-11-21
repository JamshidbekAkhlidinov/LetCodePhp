<?php
class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $items = [];
        for($i = 1; $i <= $numRows; $i++){
            $list = [];
            for($j = 1; $j <= $i; $j++){
               
            }
           $items[] = $list;
        }
        return $items;
    }
}
$obj = new Solution();
$result = $obj->generate(5);
print_r($result);