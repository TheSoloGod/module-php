<?php
    include_once "Class-Shape.php";
    Class Rectangle extends Shape{
        public $width;
        public $height;
        public function __construct($name, $width, $height)
        {
            parent::__construct($name);
            $this->width = $width;
            $this->height = $height;
        }
        public function area(){
            return $this->width * $this->height;
        }
        public function perimeter(){
            return ($this->width + $this->height) * 2;
        }
    }