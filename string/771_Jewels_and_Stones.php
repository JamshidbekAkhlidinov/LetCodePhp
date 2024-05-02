<?php

class Solution
{

    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones)
    {
        $count = 0;
        for ($i = 0; $i < strlen($jewels); $i++) {
            for ($j = 0; $j < strlen($stones); $j++) {
                if ($jewels[$i] === $stones[$j]) {
                    $count++;
                }
            }
        }
        return $count;
    }
}

$obj = new Solution();
$jewels = "aA";
$stones = "aAAbbbb";
print_r($obj->numJewelsInStones($jewels, $stones));