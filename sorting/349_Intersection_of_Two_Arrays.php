<?php

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2)
    {
        $list = [];
        foreach ($nums1 as $num1) {
            foreach ($nums2 as $num2) {
                if ($num1 == $num2) {
                    $list[$num1] = $num2;
                    break;
                }
            }
        }
        return $list;
    }
}

$obj = new Solution();
$nums1 = [1, 2, 2, 1];
$nums2 = [2, 2];
print_r($obj->intersection($nums1, $nums2));
$nums1 = [4, 9, 5];
$nums2 = [9, 4, 9, 8, 4];
print_r($obj->intersection($nums1, $nums2));
