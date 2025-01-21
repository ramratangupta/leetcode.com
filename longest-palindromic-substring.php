<?php
class Solution {

    /**
     * @param string $s
     * @return string
     */
    function longestPalindrome($s) {
        $len = strlen($s);
        if($len<=1){
            return $s;
        }
        $lps = "";
        for($i=0; $i<strlen($s); $i++){
            $p1 = $this->getPalindrome($s,$len,$i,$i);
            if(strlen($p1)>strlen($lps)){
                $lps = $p1;
            }
            $p1 = $this->getPalindrome($s,$len,$i,$i+1);
            if(strlen($p1)>strlen($lps)){
                $lps = $p1;
            }            
        }
        return $lps;
    }
    private function getPalindrome($s,$len,$left,$right){
        while($left>=0 && $right<=$len && $s[$left] == $s[$right]){
            $left--;
            $right++;
        }
        return substr($s,$left+1,$right-1-$left);

    }
}