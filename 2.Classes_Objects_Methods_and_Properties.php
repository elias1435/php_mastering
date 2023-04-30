<?php

//class
class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }

    function sayName(){
        echo "My name is {$this->name}";
    }
}

//object
$h1 = new Human();
$h2 = new Human();
$h1->name = "Elias";
$h2->name = "Hasin";
