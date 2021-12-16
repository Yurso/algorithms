<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    public function longestPalindrome($s) {
        $start = 0;
        $end = 0;
        if (strlen($s) <= 1) {
            return $s;
        }
        for ($i = 0; $i < strlen($s); $i++) {
        	$len1 = $this->findFromCenter($s, $i, $i); 
        	$len2 = $this->findFromCenter($s, $i, $i+1);
        	if ($len1 > $len2) {
        		$len = $len1;
        	} else {
        		$len = $len2;
        	}
            if ($len > $end - $start) {
            	$start = $i - ($len-1)/2;
            	$end = $i + $len/2;
            }
        }
        return substr($s, $start, $end+1);                
    }

    private function findFromCenter($s, $l, $r) {
    	while ($l >= 0 && $r < strlen($s) && substr($s, $l, 1) == substr($s, $r, 1))        	
        {
            $l--;
            $r++;
        } 
        return $r-$l-1;
    }
}
