<?php
class Solution {
    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function islandPerimeter($grid) {
        $rows = count($grid); // Satrlar soni
        $perimeter = 0; // Perimetrni hisoblash uchun
        for ($i = 0; $i < $rows; $i++) {
            $cols = count($grid[$i]); // Ustunlar soni
            for ($j = 0; $j < $cols; $j++) {
                if ($grid[$i][$j] == 1) { 
                    $leftBoundary = !isset($grid[$i][$j-1]) || $grid[$i][$j-1] == 0;
                    $rightBoundary = !isset($grid[$i][$j+1]) || $grid[$i][$j+1] == 0;
                    $topBoundary = !isset($grid[$i-1][$j]) || $grid[$i-1][$j] == 0;
                    $bottomBoundary = !isset($grid[$i+1][$j]) || $grid[$i+1][$j] == 0;

                    if ($leftBoundary) { $perimeter += 1; }
                    if ($rightBoundary) { $perimeter += 1; }
                    if ($topBoundary) { $perimeter += 1; }
                    if ($bottomBoundary) { $perimeter += 1; }
                }
            }
        }
        return $perimeter;
    }
}
$obj = new Solution();
echo $obj->islandPerimeter([[0,1,0,0],[1,1,1,0],[0,1,0,0],[1,1,0,0]])."\n"; // Natija: 16
echo $obj->islandPerimeter([[1]])."\n"; // Natija: 4
echo $obj->islandPerimeter([[1,0]])."\n"; // Natija: 4
