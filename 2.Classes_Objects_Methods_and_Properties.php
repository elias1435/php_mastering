<?php

//class
class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }

    function sayName(){
        echo "My name is {$this->name}\n";
    }
}

//object
$h1 = new Human();
$h2 = new Human();

$h1->name = "Rubel"; //set
$h2->name = "Elias";

$h1->sayHi();
$h2->sayHi();
