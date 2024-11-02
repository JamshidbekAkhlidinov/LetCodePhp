<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val)
    {
        foreach ($nums as $n => $num) {
            if ($num == $val) {
                unset($nums[$n]);
            }
        }
        return count($nums);
    }
}

$obj = new Solution();
$nums = [0, 1, 2, 2, 3, 0, 4, 2];
$result = $obj->removeElement($nums, 2);

echo $result;
