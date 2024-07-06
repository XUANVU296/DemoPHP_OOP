<?php
class Person {
    public $name;
    public $age;

    public function greet() {
        return "Xin chào, tôi là " . $this->name . " và tôi " . $this->age . " tuổi.";
    }
}

$person1 = new Person();
$person1->name = "Vũ";
$person1->age = 22;
echo $person1->greet();
?>