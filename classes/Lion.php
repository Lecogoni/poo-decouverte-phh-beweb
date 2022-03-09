<?php 

class Lion extends Animal {

  

  private static $count;

    function __construct(){
      $this->count ++;
      parent::count('add');
    }

    function __destruct(){
      $this->count --;
      parent::count('sub');
    }
    
}