<?php
    Class Circle {
        public $color;
        public $radius;
        public function __construct($color, $radius)
        {
            $this->color = $color;
            $this->radius = $radius;
        }
        public function getColor(){
            return $this->color;
        }
        public function setColor($color){
            $this->color = $color;
        }
        public function getRadius(){
            return $this->radius;
        }
        public function setRadius($radius){
            $this->radius = $radius;
        }
        public function area (){
            return pi() * pow($this->radius, 2);
        }
        public function perimeter (){
            return 2 * pi() * $this->radius;
        }
        public function toString(){
            return "Hinh tron, mau $this->color, ban kinh la $this->radius";
        }
    }