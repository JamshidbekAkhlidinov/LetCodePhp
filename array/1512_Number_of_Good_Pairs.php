<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums)
    {
        $count = 0;
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$i] == $nums[$j]) $count++;
            }
        }
        return $count;
    }
}

$object = new Solution();
echo $object->numIdenticalPairs([1,2,3,1,1,3]);