<?php

class Solution1 {

    /**
     * The mean is the average of a set of numbers, while the median is the middle value in a set of numbers.
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $final = array_merge($nums1,$nums2);
        usort($final,function($a,$b){
            return $a-$b;
        });
        $len = count($final);
        $mid = (int)($len/2);
        if($len%2==0){
            //Even case
            return ($final[$mid]+$final[$mid-1])/2;
        }else{
            //Odd case
            return $final[$mid];
        }
    }
}

class Solution {

    /**
     * The mean is the average of a set of numbers, while the median is the middle value in a set of numbers.
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $final = [];
        //Sort using merge sort
        $i=0;
        $len1 = count($nums1);
        $j=0;
        $len2 = count($nums2);
        while($i<$len1 && $j<$len2){
            if($nums1[$i]<$nums2[$j]){
                $final[] = $nums1[$i];
                $i++;
            }else{
                $final[] = $nums2[$j];
                $j++;
            }
        }
        while($i<$len1){
            $final[] = $nums1[$i];
            $i++;
        }
        while($j<$len2){
            $final[] = $nums2[$j];
            $j++;
        }
        $len = $len1+$len2;
        $mid = (int)($len/2);
        if($len%2==0){
            //Even case
            return ($final[$mid]+$final[$mid-1])/2;
        }else{
            //Odd case
            return $final[$mid];
        }
    }
}
