<?php
    class Person {
        protected $name;
        protected $age;
      
        public function __construct($name, $age) {
          $this->name = $name;
          $this->age = $age;
        }
        public function displayInfo() {
          echo "Tên: " . $this->name . ", Tuổi: " . $this->age;
        }
      }
      
      class Student extends Person {
        private $studentID;
      
        public function __construct($name, $age, $studentID) {
          parent::__construct($name, $age);
          $this->studentID = $studentID;
        }
        public function displayStudentInfo() {
          echo "Tên: " . $this->name . ", Tuổi: " . $this->age . ", Mã số sinh viên: " . $this->studentID;
        }
      }
      
      $student = new Student("Nguyễn Xuân Vũ", 22, "12345");
      $student->displayStudentInfo();
?>