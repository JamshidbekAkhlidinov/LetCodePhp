<?php
//error_reporting
class Solution
{

    /**
     * @param Integer[][] $rectangles
     * @return Integer
     */
    function interchangeableRectangles($rectangles)
    {
        $count = 0;
        for ($i = 0; $i < count($rectangles)-1; $i++) {
            $x1 = $rectangles[$i][0];
            $y1 = $rectangles[$i][1];
            for ($j = $i + 1; $j < count($rectangles); $j++) {
                $x2 = $rectangles[$j][0];
                $y2 = $rectangles[$j][1];
                if (($x1 < $x2 && $y1 < $y2) || ($x1 > $x2 && $y1 > $y2)) {
                    $count++;
                }
            }
        }
        return $count;
    }
}

$object = new Solution();
$rectangles = [[4, 8], [3, 6], [10, 20], [15, 30]];
$rectangles2 = [[4,5],[7,8]];
echo $object->interchangeableRectangles($rectangles);
echo "\nnew\n";
echo $object->interchangeableRectangles($rectangles2);