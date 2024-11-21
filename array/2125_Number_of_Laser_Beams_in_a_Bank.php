<?php

class Solution
{
    /**
     * @param String[] $bank
     * @return Integer
     */
    function numberOfBeams($bank)
    {
        $numbers = array_filter($bank, function ($a) {
            return $a > 0;
        });
        if (count($numbers) <= 1) {
            return 0;
        }
        $list = [];
        foreach ($numbers as $number) {
            $split = array_filter(str_split($number), function ($a) {
                return $a > 0;
            });
            $list[] = count($split);
        }
        $sum = 0;
        for ($i = 0; $i < count($list); $i++) {
            if (isset($list[$i + 1])) {
                $sum += ((int)$list[$i] * (int)$list[$i + 1]);
            }
        }
        return $sum;
    }
}

$obj = new Solution();
echo $obj->numberOfBeams(["011001", "000000", "010100", "001000"]) . "\n";
echo $obj->numberOfBeams(["000", "111", "000"]) . "\n";
