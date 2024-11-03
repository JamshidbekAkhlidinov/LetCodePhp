<?php

class Solution {

    /**
     * @param String $s
     * @param String $goal
     * @return Boolean
     */
    /*
     function rotateString($s, $goal) {
        $split = str_split($s);
        $count = count($split);

        for($i=0; $i<$count; $i++) {
            if($goal==implode($split)){
                return true;
            }
            $split[$count+$i] = $split[$i];
            unset($split[$i]);
        }
       return false;
    }
    */
      function rotateString($s, $goal) {
        $count = strlen($s);
        $s2 = $s;
        for ($i = 0; $i < $count; $i++) {
            $s = substr($s, 1) . $s[0];
            if ($s === $goal) {
                return true;
            }
        }
       return false;
    }
    
}


$Obj = new Solution();
$s = "abcde"; $goal = "cdeab";
$res = $Obj->rotateString($s,$goal);
print_r($res);