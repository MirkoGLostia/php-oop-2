<?php

class Category {

    private $genre;
    private $name;

    public function __construct($genre, $name) {

        $this -> setgenre($genre);
        $this -> setName($name);
    }
    
    public function getgenre() {
        
        return $this -> genre;
    }
    public function setgenre($genre) {

        $this -> genre = $genre;
    }
    public function getName() {

        return $this -> name;
    }
    public function setName($name) {

        $this -> name = $name;
    }
}

?>