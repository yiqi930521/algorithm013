<?php

/**
 * 寻找旋转排序数组中的最小值
 * https://leetcode-cn.com/problems/find-minimum-in-rotated-sorted-array/
 *
 * Class Solution
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMin($nums)
    {
        $count = count($nums);
        $left = 0;
        $right = $count - 1;
        while ($left < $right) {
            if ($nums[$left] <= $nums[$right]) return $nums[$left];

            $mid = $left + floor(($right - $left) / 2);

            if ($nums[$mid] > $nums[$right]) {
                $left = $mid + 1;
            } else {
                $right = $mid;
            }
        }
        return $nums[$left];
    }
}

$a = [3, 4, 5, 1, 2];
$solution = new Solution();
print_r($solution->findMin($a));
