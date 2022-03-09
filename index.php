<?php 

// Charge l'ensemble des fichiers / des classes présents dans le dossier classes
spl_autoload_register(function ($class_name) {
    include './classes/' . $class_name . '.php';
});


$my_zoo = new Zoo;





