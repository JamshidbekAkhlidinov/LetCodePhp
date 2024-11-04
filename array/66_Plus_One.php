<?php
class Solution {
    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $implode = implode($digits);
        if (substr_count($implode, "9") === strlen($implode)) {
            return array_map('intval', str_split("1" . str_repeat("0", strlen($implode))));
        }
        $digits2 = array_map('intval',array_reverse($digits));
        foreach ($digits2 as $n => $digit) {
           $digit = intval($digit);
            if ($digit + 1 > 9) {
                $digits2[$n] = 0; 
            } else {
                $digits2[$n] += 1;
                break;
            }
        }
        return array_reverse($digits2);
    }
}

$obj = new Solution();
print_r($obj->plusOne([1,2,3]));
#print_r($obj->plusOne([7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6]));
print_r($obj->plusOne([9]));
print_r($obj->plusOne([9,9,9,9,9,9,9,9,9,9,9,9,9]));

