<?php


class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function countTriples($n) {
        $count = 0;
        for($i=1;$i<=$n;$i++) {
            for($j=1;$j<=$i;$j++) {
                for($k=1;$k<=$i;$k++){
                    if($k*$k+$j*$j == $i*$i){
                        $count++;
                    }
                }
            }
        }
        return $count ;
    }
}

$obj = new Solution();
echo $obj->countTriples(5)."\n";
echo $obj->countTriples(10)."\n";
echo $obj->countTriples(240)."\n";