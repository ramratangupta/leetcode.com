<?php
//https://leetcode.com/problems/add-two-numbers/
/**
 * Definition for a singly-linked list.
 */
class ListNode {
      public $val = 0;
      public $next = null;
      function __construct($val = 0, $next = null) {
         $this->val = $val;
          $this->next = $next;
     }
 }

class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $final = new ListNode(0);
        $cur = $final;
        $carry = 0;
        while ($l1 !== null || $l2 !== null || $carry > 0) {
            $x1 = 0;
            if ($l1 != null) {
                $x1 = $l1->val;
                $l1 = $l1->next;
            }
            $x2 = 0;
            if ($l2 != null) {
                $x2 = $l2->val;
                $l2 = $l2->next;
            }
            $sum = $x1 + $x2 + $carry;
            $digit = $sum % 10;
            $carry = (int) ($sum / 10);
            $cur->next = new ListNode($digit);
            $cur = $cur->next;
        }
        return $final->next;
    }
}
function createListNode($str){
    $arr = explode(',',$str);
    $dummy = new ListNode(0);
    $cur = $dummy;
    foreach($arr as $val){
        $cur->next = new ListNode($val);
        $cur = $cur->next;
    }
    return $dummy->next;
}
$x1 = new ListNode(0);
$x2 = new ListNode(0);
if(!empty($argv[1])){
    $x1 = createListNode($argv[1]);
}
if(!empty($argv[2])){
    $x2 = createListNode($argv[2]);
}
$check = new Solution();
print_r($check->addTwoNumbers($x1, $x2));