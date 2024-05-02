<?php

class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        if (empty($strs)) {
            return "";
        }
        $array = array_map(function ($str) {
            return [strlen($str) => $str];
        }, $strs);

        sort($array);
        $min_len_str = array_values($array[0])[0];

        for ($i = 0; $i < strlen($min_len_str); $i++) {
            foreach ($strs as $str) {
                if ($str[$i] !== $min_len_str[$i]) {
                    return substr($min_len_str, 0, $i);
                }
            }
        }
    }
}

$obj = new Solution();
$strs1 = ["flower", "flow", "flight"];
$strs2 = ["dog", "racecar", "car"];

echo $obj->longestCommonPrefix($strs1);
echo "\n";
echo $obj->longestCommonPrefix($strs2);

