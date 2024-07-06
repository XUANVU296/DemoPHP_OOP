<?php
class Car {
    public static $count = 0;
  
    public function __construct() {
      self::$count++;
    }
  }
  
  $car1 = new Car();
  $car2 = new Car();
  echo Car::$count;
?>