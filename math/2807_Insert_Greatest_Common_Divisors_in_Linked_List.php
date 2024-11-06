<?php

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {

    function ekuk($a,$b){
        $max = $b;
        $min = $a;

        if($a > $b){
            $max = $a;
            $min = $b;
        }

        if($max % $min == 0){
            return $min;
        }
        return $this->ekuk($min,$max % $min);
    }
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function insertGreatestCommonDivisors($head) {
        $newObj = new ListNode($head->val);
        $current = $newObj;
        while($head->next !== null  ) {
            $val1 = $head->val;
            $val2  = $head->next->val;
            $ekuk = $this->ekuk($val1,$val2);
            
            $current->next = new ListNode($ekuk);
            $current = $current->next;
            
            $current->next = new ListNode($val2);
            $current  = $current->next;

            $head = $head->next;
        }
        return $newObj;
    }
}
// [18,6,10,3]
$obj = new Solution();

$head = new ListNode(18);
$head->next = new ListNode(6);
$head->next->next = new ListNode(10);
$head->next->next->next = new ListNode(3);

$res =  $obj->insertGreatestCommonDivisors($head);

print_r($res);