<?php 

class Animals {
    private array $animals;

    public function add(Animal $a){
        array_push($this->animals,$a);
    }

    public function getAll(): array{
        return $this->animals;
    }
}