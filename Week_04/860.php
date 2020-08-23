<?php

/**
 * 柠檬水找零
 * https://leetcode-cn.com/problems/lemonade-change/
 *
 * Class Solution
 */
class Solution
{
    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills)
    {
        $five = 0;
        $ten = 0;
        foreach ($bills as $bill) {
            switch ($bill) {
                case "5":
                    $five++;
                    break;
                case "10":
                    if ($five == 0) return false;
                    $five--;
                    $ten++;
                    break;
                default:
                    if ($five > 0 && $ten > 0) {
                        $five--;
                        $ten--;
                    } elseif ($five >= 3) {
                        $five -= 3;
                    } else {
                        return false;
                    }
            }
        }
        return true;
    }
}

$a = [5,5,5,10,20];
$b = [5,5,10,10,20];
$solution = new Solution();
print_r($solution->lemonadeChange($a));