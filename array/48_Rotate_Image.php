<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate($matrix)
    {
        $matrix = array_reverse($matrix);
        $items = $matrix;
        $n = count($matrix);
        for ($i = 0; $i < $n; ++$i) {
            for ($j = $i + 1; $j < $n; ++$j) {
                $temp = $matrix[$i][$j];
                $items[$i][$j] = $matrix[$j][$i];
                $items[$j][$i] = $temp;
            }
        }
        return $items;
    }
}

$obj = new Solution();
$matrix = [[1,2,3],[4,5,6],[7,8,9]];
print_r($obj->rotate($matrix));