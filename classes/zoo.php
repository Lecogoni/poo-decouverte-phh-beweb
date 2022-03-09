<?php 

/**
 * class représentant un Zoo
 */
class Zoo {

  // zone de déclaration

    /**
     * représente les espaces de mon Zoo - type d'Objet Spaces
     * liste d'espace : enclos, cafétéria, .... 
     */
    private static ?Zoo $instance = null;
    private Spaces $spaces;

  // zone d'initialisation
  
    private function __construct(){
      $this->spaces = new Spaces;
    }
  
  // zone d'implémentation

    static function get_instance(){
      if (self::$instance ===  null) self::$instance = new Zoo;
      return self::$instance;
    }

    /** LIVRAISON D'ANIMAUX
     * Ajoute un animal / animaux dans Spaces
     */
    public function delivery(Animals $a = null): void{
      this->spaces->addAll($a);
  }




}