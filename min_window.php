<?php
class Solution {
    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function minWindow($s, $t) {
        
        $l=0;
        $len = 0;
        
        for ($i=0; $i<strlen($s); $i++) {
            if (strpos($t, $s[$i]) === false) {
                continue;
            }
            $found = [];
            $j = $i;
            while (count($found) < strlen($t) && $j<strlen($s)) { 
                $char_pos = strpos($t, $s[$j]);
                if ($char_pos !== false) {
                    $found[$char_pos] = true;
                }                
                $j++;
            }
            if (count($found) == strlen($t) && ($j-$i < $len || $len == 0)) {
                $l=$i;
                $len = $j-$i+1;
            }
        }
                    
        return substr($s, $l, $len);
        
    }
    
}
