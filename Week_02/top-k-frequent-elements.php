<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k)
    {
        $count = array_count_values($nums);
        $pq = new SplPriorityQueue();
        foreach ($count as $num => $freq) {
            $pq->insert($num, $freq);
        }

        $ans = [];
        for ($i = 0; $i < $k; ++$i) {
            $ans[] = $pq->extract();
        }

        return $ans;
    }
}