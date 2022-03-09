<?php 

/**
 * Space représente un emplacement dans Spaces - espace de mon Zoo
 * un Space sert à accueillir un ou plrs animaux
 */
abstract class Space {

  // zone de déclaration

    // stocke la liste des animaux contenu dans ce Space
    private array $animals = [];


  // zone d'initialisation

  // zone d'implémentation

    /**
     * method use to add a animal in this space
     * PARAMS take a object Animal as argument and add it in the array $animals
     * RETURN nothing
     */ 
    public function add(Animal $a): void{
        array_push($this->animals, $a);
    }

    /**
     * 
     *
     * @param integer $index 
     * @return boolean return true if animal is removed false otherwise
     */
    public abstract function removeAnimalByIndex(int $index): bool;

    public abstract function remove(Animal $a): bool;

}