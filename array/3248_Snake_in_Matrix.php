<?php

class Solution
{
    /**
     * @param Integer $n
     * @param String[] $commands
     * @return Integer
     */
    function finalPositionOfSnake($n, $commands)
    {
        foreach ($commands as $command) {
            if (!isset($counts[$command])) {
                $counts[$command] = 0;
            }
            $counts[$command]++;
        }
        $DOWN = $counts['DOWN'] ?? 0;
        $RIGHT = $counts['RIGHT'] ?? 0;
        $LEFT = $counts['LEFT'] ?? 0;
        $UP = $counts['UP'] ?? 0;

        $y = abs($UP - $DOWN);
        $x = abs($RIGHT - $LEFT);

        return ($y * $n) + $x;
    }
}
$obj = new Solution();
echo $obj->finalPositionOfSnake(2, ["DOWN", "RIGHT"])."\n";
echo $obj->finalPositionOfSnake(3, ["DOWN", "RIGHT", "UP"])."\n";


