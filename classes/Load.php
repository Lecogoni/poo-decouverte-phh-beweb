<?php

class Load implements Deliverable {


  public Loads $loads;

  public function __construct(){
    $this->$loads = new Loads;
  }

  public function deliver(Deliverable $l){
    // vider le contenu de $loads
  }


}