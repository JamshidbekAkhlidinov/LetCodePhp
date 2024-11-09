<?php
class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        // $i=65;$i<=90;$i++
        $str = "";
        while($columnNumber > 0){
            $mod =  (int)$columnNumber % 26;
            if($mod==0){
                $mod = 26;
                $columnNumber = (int)$columnNumber - 1;
            }
            $str = chr(64 + $mod) . $str;
            $columnNumber = floor($columnNumber / 26);
       }
       return $str;
    }
}
$obj = new Solution();
echo $obj->convertToTitle(51)."\n";
echo $obj->convertToTitle(52)."\n";
echo $obj->convertToTitle(53)."\n";
echo $obj->convertToTitle(701)."\n";
echo $obj->convertToTitle(702)."\n";
