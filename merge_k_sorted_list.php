<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists($lists) {
        
       $result = null;
        $current = null;
        
        while (count($lists)) {
            
            $min_pos = 0;
            
            foreach ($lists as $key => $list) {
                if ($list == null) {
                    unset($lists[$key]);
                    continue;
                }
                if (!isset($lists[$min_pos]) || $list->val < $lists[$min_pos]->val) {
                    $min_pos = $key;
                }
            }            
                  
            if ($result == null) {
                $result = $lists[$min_pos];
            } else {
                $current->next = $lists[$min_pos];
            }
            
            $current = $lists[$min_pos];
            
            if ($lists[$min_pos]->next == null) {
                unset($lists[$min_pos]);
            } else {
                $lists[$min_pos] = $lists[$min_pos]->next;
            }

        } 
        
        return $result;
        
    }
}
