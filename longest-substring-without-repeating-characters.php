<?php

class Solution
{
    function lengthOfLongestSubstring($s): int
    {
        $seen = [];
        $maxLength = 0;
        $left = 0;

        for ($right = 0; $right < strlen($s); $right++) {

            $currentChar = $s[$right];
            //echo "\n right $right | currentChar $currentChar | Left $left";print_r($seen);
            //If character is already in window, move left pointer

            if (isset($seen[$currentChar]) && $seen[$currentChar] >= $left) {
                //echo "| seen[currentChar] {$seen[$currentChar]} Left $left >= seen[currentChar] >= left";
                $left = $seen[$currentChar] + 1;
            }
            $seen[$currentChar] = $right;
            //echo "\n_______________________\n | maxLength before  $maxLength, right - left $right - $left";
            $maxLength = max($maxLength, $right - $left + 1);
            //echo " \n| maxLength after  $maxLength";
            //echo "\n*********************************************************\n";
        }
        //print_r($seen);
        return $maxLength;
    }
}
$s = new Solution();
echo "\n\n";
echo $s->lengthOfLongestSubstring($argv[1]??"");

