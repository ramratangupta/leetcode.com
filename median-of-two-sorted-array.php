<?php
class FirstSolution
{

    /**
     * The mean is the average of a set of numbers, while the median is the middle value in a set of numbers.
     * @param integer[] $nums1
     * @param integer[] $nums2
     * @return float
     */
    function findMedianSortedArrays($nums1, $nums2):float
    {
        $final = array_merge($nums1, $nums2);
        usort($final, function ($a, $b) {
            return $a - $b;
        });
        $len = count($final);
        $mid = (int) ($len / 2);
        if ($len % 2 == 0) {
            //Even case
            return ($final[$mid] + $final[$mid - 1]) / 2;
        } else {
            //Odd case
            return $final[$mid];
        }
    }
}