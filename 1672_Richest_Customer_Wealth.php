<?php
class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $items = [];
        foreach ($accounts as $account) {
            $items[] = array_sum($account);
        }
        return max($items);
    }
}

$accounts = [[2,8,7],[7,1,3],[1,9,5]];
$obj = new Solution();

echo $obj->maximumWealth($accounts);