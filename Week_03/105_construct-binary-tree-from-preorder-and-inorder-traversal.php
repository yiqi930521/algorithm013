<?php

/**
 * 105 从前序与中序遍历序列构造二叉树
 * https://leetcode-cn.com/problems/construct-binary-tree-from-preorder-and-inorder-traversal/
 *
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution
{

    /**
     * @param Integer[] $preorder
     * @param Integer[] $inorder
     * @return TreeNode
     */
    function buildTree($preorder, $inorder)
    {
        if (empty($inorder)) {
            return null;
        }

        $root = new TreeNode($preorder[0]);
        $index = array_search($preorder[0], $inorder);

        $root->left = $this->buildTree(array_slice($preorder, 1, $index + 1), array_slice($inorder, 0, $index));
        $root->right = $this->buildTree(array_slice($preorder, $index + 1), array_slice($inorder, $index + 1));

        return $root;
    }
}