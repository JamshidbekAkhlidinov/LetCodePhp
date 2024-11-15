<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getSneakyNumbers($nums)
    {
        $counts = [];
        foreach ($nums as $num) {
            if (!isset($counts[$num])) {
                $counts[$num] = 0;
            }
            $counts[$num] += 1;
        }
        return array_keys(
            array_filter($counts, function ($num) {
                return $num >= 2;
            })
        );
    }
}

$obj = new Solution();
print_r($obj->getSneakyNumbers([0, 1, 1, 0]));
echo "\n";
print_r($obj->getSneakyNumbers([7, 1, 5, 4, 3, 4, 6, 0, 9, 5, 8, 2]));
