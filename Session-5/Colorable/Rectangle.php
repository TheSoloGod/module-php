<?php
    class Rectangle {
        public $name;
        public $width;
        public $height;
        public function __construct($name, $width, $height)
        {
            $this->name = $name;
            $this->width = $width;
            $this->height = $height;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getWidth(){
            return $this->width;
        }
        public function setWidth($width){
            $this->width = $width;
        }
        public function getHeight(){
            return $this->height;
        }
        public function setHeight($height){
            $this->height = $height;
        }
        public function area(){
            return $this->width * $this->height;
        }
    }
?>