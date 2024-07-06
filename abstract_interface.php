<?php
    // Abstract
    abstract class Shape {
        abstract public function calculateArea();
    }
    
    class Circle extends Shape {
        private $radius;
    
        public function __construct($radius) {
        $this->radius = $radius;
        }
        public function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
        }
    }
    
    $circle = new Circle(5);
    echo $circle->calculateArea();
    
    // Interface
    interface Animal {
        public function makeSound();
    }
    
    class Dog implements Animal {
        public function makeSound() {
        echo "Gâu gâu";
        }
    }
    
    $dog = new Dog();
    $dog->makeSound();
?>