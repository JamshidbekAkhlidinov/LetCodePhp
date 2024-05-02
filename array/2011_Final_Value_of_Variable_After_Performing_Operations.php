<?php

class Solution
{

    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations)
    {
        $sum = 0;
        foreach ($operations as $operation) {
            for ($i = 0; $i < strlen($operation); $i++) {
                if ($operation[$i] == "+") {
                    $sum++;
                    break;
                } elseif ($operation[$i] == "-") {
                    $sum--;
                    break;
                }
            }
        }
        return $sum;
    }
}


$operations = ["--X", "X++", "X++"];
$operations2 = ["++X", "++X", "X++"];

$object = new Solution();
echo $object->finalValueAfterOperations($operations);
echo "\n";
echo $object->finalValueAfterOperations($operations2);