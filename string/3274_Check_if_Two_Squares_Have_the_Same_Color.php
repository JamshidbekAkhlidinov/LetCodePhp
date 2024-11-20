<?php

class Solution
{

    /**
     * @param String $coordinate1
     * @param String $coordinate2
     * @return Boolean
     */
    function checkTwoChessboards($coordinate1, $coordinate2)
    {
        $list = [];
        for ($i = 1; $i <= 8; $i++) {
            for ($j = 1; $j <= 8; $j++) {
                if (($j % 2  == 0 && $i % 2 == 1) || ($j % 2  == 1 && $i % 2 == 0)) {
                    $list[chr($i + 96) . ($j)] = 1;
                } else {
                    $list[chr($i + 96) . ($j)] = 0;
                }
            }
        }
        return $list[$coordinate1]==$list[$coordinate2];
    }
}

$obj = new Solution();
echo $obj->checkTwoChessboards("a1", "c3") . "\n";
echo $obj->checkTwoChessboards("a1", "h3") . "\n";
