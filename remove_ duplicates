<?php
class Solution {

    function removeDuplicates(&$nums) {
       
        $k = count($nums);
        if ($k < 3) {
            return $k;
        }
        
        $pos = 2;
        for ($i=$pos; $i<count($nums); $i++) {
            $nums[$pos] = $nums[$i];
            if ($nums[$pos] == $nums[$pos-1] && $nums[$pos] == $nums[$pos-2]) {
                $k--;
            } else {
                $pos++;
            }
        }
        
        return $k;
    }    
    
}
