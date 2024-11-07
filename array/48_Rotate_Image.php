<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix)
    {
        $matrix = array_reverse($matrix);
        $n = count($matrix);
        for ($i = 0; $i < $n; ++$i) {
            for ($j = $i + 1; $j < $n; ++$j) {
                $temp = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$j][$i];
                $matrix[$j][$i] = $temp;
                
            }
        }
    }
}

$obj = new Solution();
$matrix = [[1,2,3],[4,5,6],[7,8,9]];
$obj->rotate($matrix);
print_r($matrix);