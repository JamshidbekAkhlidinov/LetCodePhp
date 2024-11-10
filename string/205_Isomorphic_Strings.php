<?php
//error
class Solution {

    function calculateCount($s){
        $n = 0; $str = [];
        for($i=0; $i<strlen($s); $i++) {
            if(!isset($str[$n]['count'])){
                $str[$n]['count'] = 0;
            } 
            $str[$n]['count'] += 1;
            if(isset($s[$i+1]) && $s[$i]!==$s[$i+1]){
                $n++;
            }
        }
        print_r($str);
        return $str;
    }

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
       
        $s1 = $this->calculateCount($s);
        $s2 = $this->calculateCount($t);

        $s1Count = count($s1);
        $s2Count = count($s2);
        $min = min($s1Count,$s2Count);

        if($s1Count != $s2Count){
            return false;
        }

        for($i = 0; $i < $min; $i++){
            if($s1[$i]['count'] != $s2[$i]['count']){
                return false;
            }
        }
        return true;
    }
}

$obj = new Solution();
// $s = "egg"; $t = "add";
// echo $obj->isIsomorphic($s, $t)."\n";
// $s = "bbbaaaba"; $t = "aaabbbba";
// echo $obj->isIsomorphic($s, $t);
$s = "badc"; $t = "baba";
echo $obj->isIsomorphic($s, $t);