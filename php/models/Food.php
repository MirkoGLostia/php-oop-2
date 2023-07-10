<?php
class Food extends Product {

    private $expiretion;

    public function __construct($name, $weight, $price, Category $category, $expiretion) {

        parent :: __construct($name, $weight, $price, $category);

        $this -> setExpiretion($expiretion);
    }

    public function getExpiretion() {

        return $this -> expiretion;
    }
    public function setExpiretion($expiretion) {

        $this -> expiretion = $expiretion;
    }
}

?>