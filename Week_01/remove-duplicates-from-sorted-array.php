<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $len = count($nums);
        for ($i=0;$i<$len-1;$i++) {
            if ($nums[$i] == $nums[$i+1]) {
                unset($nums[$i]);
            }
        }
        return count($nums);
    }
}