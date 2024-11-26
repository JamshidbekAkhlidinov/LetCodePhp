<?php

class Solution {
    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $list = [];
        for($i=1;$i<=$n;$i++){
            $three = $i % 3 == 0;
            $five = $i % 5 == 0;
            $both  = $three && $five;
            if($both){
                $list[] = "FizzBuzz";
            }elseif($three){
                $list[] = "Fizz";
            }elseif($five){
                $list[] = "Buzz";
            }else{
                $list[] = (string)$i;
            }
        }
        return $list;
    }
}
$obj  = new Solution();
$result = $obj->fizzBuzz(15);
print_r($result);