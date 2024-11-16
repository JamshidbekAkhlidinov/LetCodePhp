<?php
class Solution
{
    /**
     * @param Integer[][] $grid
     * @return Integer[]
     */
    function findMissingAndRepeatedValues($grid)
    {
        $counts = [];
        foreach ($grid as $key => $value) {
            foreach ($value as $key2 => $value2) {
                if (!isset($counts[$value2])) {
                    $counts[$value2] = 0;
                }
                $counts[$value2] += 1;
            }
        }
        $list = []; $list2 = [];
        for ($i = 1; $i <= count($grid) * count($grid); $i++) {
            if ((isset($counts[$i]) && $counts[$i] > 1)) {
                $list[] = $i;
            }
            if(!isset($counts[$i])){
                $list2[] = $i;
            }
        }
        return array_merge($list,$list2);
    }
}
$obj = new Solution();
print_r($obj->findMissingAndRepeatedValues([[1, 3], [2, 2]]));
echo "\n";
print_r($obj->findMissingAndRepeatedValues([[9, 1, 7], [8, 9, 2], [3, 4, 6]]));