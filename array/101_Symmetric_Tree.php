<?php

class TreeNode {
     public $val = null;
     public $left = null;
     public $right = null;
     function __construct($val = 0, $left = null, $right = null) {
         $this->val = $val;
         $this->left = $left;
         $this->right = $right;
     }
 }

 class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isSymmetric($root) {
        while($root->left!==null && $root->right!==null) {
            if($root->left->val !== $root->right->val){
                return false;
            }
            $root->left = $root->left->left;
            $root->right = $root->right->left;
        }
        return true;
    }   
}

$root = new TreeNode(1);
$root->left = new TreeNode(2);
$root->right = new TreeNode(2);
$root->left->left = new TreeNode(3);
$root->left->right = new TreeNode(4);
$root->right->left = new TreeNode(4);
$root->right->right = new TreeNode(3);

$obj = new Solution();
echo $obj->isSymmetric($root);