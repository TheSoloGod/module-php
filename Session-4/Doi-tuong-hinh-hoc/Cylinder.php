<?php
    include_once "Circle.php";
    Class Cylinder extends Circle {
        public $height;
        public function __construct($name, $radius, $height)
        {
            parent::__construct($name, $radius);
            $this->height = $height;
        }
        public function area()
        {
            return parent::area() * 2 + parent::perimeter() * $this->height; // TODO: Change the autogenerated stub
        }
        public function volume(){
            return parent::area() * $this->height;
        }
    }