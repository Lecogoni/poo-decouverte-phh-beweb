<?php 

class Animal implements Deliverable {
    
  private static $count;
  
  static function count($count){
    if ($count == "add"){
      self::$count ++;
    } else {
      self::$count --;
    }
  }

  public function load(Deliverable $a){
    // fou l'animal quelque part
  }


}