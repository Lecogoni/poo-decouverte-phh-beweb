<?php 

/**
 * Collection d'espaces utilisables dans le zoo !
 * liste d'objet intermédiaire entre Zoo et Space
 */
abstract class Spaces {

  // zone de déclaration

    // Spaces représente un liste d'espace 
    private array $spaces;

  // zone d'initialisation

    public function  __constructor(): Spaces{
        $this->spaces = [];
    }


  // zone d'implémentation
    public abstract function add(Animal $a): void;

    /**
     * 
     */
    public function addAll(Animals $a): void {

    }

    public abstract function new(Space $s): void;


    public function getAll(): array {
        return $this->spaces;
    }
}
