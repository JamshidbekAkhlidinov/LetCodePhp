<?php
class Solution
{
    /**
     * @param String[] $garbage
     * @param Integer[] $travel
     * @return Integer
     */
    function garbageCollection($garbages, $travel) {
        $g = 0; $p = 0; $m = 0;
        $haveP = 0; $haveG = 0; $haveM = 0;
        $n = count($garbages);
        for ($i = 0; $i < $n; $i++) {
            $all = str_split($garbages[$i]);
            foreach($all as $symbol){
                if($symbol == 'P'){
                    $p += 1;
                    $haveP = $i;
                }
                if($symbol == 'G'){
                    $g += 1;
                    $haveG = $i;
                }
                if($symbol == 'M'){
                    $m += 1;
                    $haveM = $i;
                }
            }
        }
        for($i = 1; $i < $n ; $i++){
            $time = (int)$travel[$i-1];
            if($i<=$haveG)  $g += $time;
            if($i<=$haveM)  $m += $time;
            if($i<=$haveP)  $p += $time;
        }
        return $p + $g + $m;
    }
}
$obj = new Solution();
echo $obj->garbageCollection(["G", "P", "GP", "GG"], [2, 4, 3]) . "\n";
echo $obj->garbageCollection(["MMM", "PGM", "GP"], [3, 10]) . "\n";
