<?php

//error_reporting
class Solution
{

    /**
     * @param Integer[] $pref
     * @return Integer[]
     */
    function findArray($pref)
    {
        if (count($pref) == 1) {
            return $pref;
        }
        $items[] = $pref[0];
        for ($i = 1; $i < count($pref) - 1; $i++) {
            $items[$i] = $pref[$i] + $pref[$i - 1];
        }
        return $items;
    }
}

$pref = [5, 2, 0, 3, 1];
$obj = new Solution();
print_r($obj->findArray($pref));