<?php
class Solution {
    /**
     * @param String $word
     * @return String
     */
    function compressedString($word) {
        $splits = str_split($word);
        $items = [];
        $n=0;
        foreach ($splits as $i=>$symbol){
            if(isset($splits[$i-1]) && $symbol!==$splits[$i-1]){
                $n++;
            }
            if(!isset($items[$n])){
                $items[$n] = null;  
            }
            $items[$n] .= $symbol; 
        }
        $str = "";
        foreach ($items as $value){
            $str2 = "";
            $len = strlen($value);
            while($len>9){
                $str2 .= "9".$value[0];
                $len-=9;
            }
            $str .= $str2.$len.$value[0];
        }
        return $str;
    }
}
$obj = new Solution();
echo $obj->compressedString("aaaaaaaaaaaaaabb")."\n";
echo $obj->compressedString("abcde")."\n";
echo $obj->compressedString("mrm")."\n";