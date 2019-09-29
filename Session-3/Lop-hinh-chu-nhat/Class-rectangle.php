<?php
    class Rectangle {
        public $width;
        public $height;

        public function __construct($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }

        public function getWidth(){
            return $this->width;
        }
        public function setWidth($newWidth){
            $this->width = $newWidth;
        }
        public function getHeight(){
            return $this->height;
        }
        public function setHeight($newHeight){
            $this->height = $newHeight;
        }
        public function getArea(){
            $area = $this->width * $this->height;
            return $area;
        }
        public function getPerimeter(){
            $perimeter = ($this->width + $this->height) * 2;
            return $perimeter;
        }
        public function display(){
            return "Rectangle{ " . "width=" . $this->width . ", height=" . $this->height . "}";
        }
    }
?>