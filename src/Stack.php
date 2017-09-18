<?php
namespace Wedo;
class Stack
{
    function __construct() {
      $this->stack = array();
    }

    public function pushInAndPopArray($item)
    {
      if (count($this->stack) % 2 == 0) { // Change une fois sur deux
        array_push($this->stack, $item);
      } else {
        array_pop($this->stack);
      }
      return $this->stack;
    }
}