<?php

class Solution
{

    /**
     * @param String[] $words
     * @param String $x
     * @return Integer[]
     */
    function findWordsContaining($words, $x)
    {
        $indexes = [];
        foreach ($words as $id => $word) {
            if (strpos($word, $x) !== false) {
                $indexes[] = $id;
            }
        }
        return $indexes;
    }
}


$obj = new Solution();
$words = ["leet", "code"];
$x = "e";
print_r($obj->findWordsContaining($words, $x));