<?php

/**
 * 岛屿数量
 * https://leetcode-cn.com/problems/number-of-islands/
 *
 * Class Solution
 */
class Solution
{
    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid)
    {
        $num = 0;
        foreach ($grid as $x => &$item) {
            foreach ($item as $y => &$value) {
                if ($value == 1) {
                    $this->flipIslands($grid, $x, $y);
                    $num++;
                }
            }
        }
        return $num;
    }

    private function flipIslands(array &$grid, int $x, int $y)
    {
        if (!isset($grid[$x][$y]) || $grid[$x][$y] != 1) return;
        $grid[$x][$y] = 0;
        $this->flipIslands($grid, $x, $y + 1);
        $this->flipIslands($grid, $x, $y - 1);
        $this->flipIslands($grid, $x + 1, $y);
        $this->flipIslands($grid, $x - 1, $y);
    }
}

$a = [
    ['1', '1', '0', '0', '0'],
    ['1', '1', '0', '0', '0'],
    ['0', '0', '1', '0', '0'],
    ['0', '0', '0', '1', '1']
];
$solution = new Solution();
print_r($solution->numIslands($a));

