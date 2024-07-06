<?php
    class Car {
        public $brand;
        protected $model;
        private $price;
      
        public function __construct($brand, $model, $price) {
          $this->brand = $brand;
          $this->model = $model;
          $this->price = $price;
        }
        public function getPrice() {
          return $this->price;
        }
      }
      
      $car = new Car("Toyota", "Corolla", 20000);
      echo $car->brand;
      echo $car->getPrice();
?>