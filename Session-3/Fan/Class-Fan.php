<?php
    Class Fan{
        public $slow = 1;
        public $medium = 2;
        public $fast = 3;
        private $speed = 1;
        private $on = false;
        public $radius = 5;
        public $color = "blue";

        public function getSpeed(){
            return $this->speed;
        }
        public function setSpeed($newSpeed){
            $this->speed = $newSpeed;
        }
        public function getOn(){
            return $this->on;
        }
        public function setOnOff(){
            if($this->on){
                $this->on = false;
            }else{
                $this->on = true;
            }
        }
        public function getColor(){
            return $this->color;
        }
        public function setColor($newColor){
            $this->color = $newColor;
        }
        public function getRadius(){
            return $this->radius;
        }
        public function setRadius($newRadius){
            $this->radius = $newRadius;
        }
        public function toString(){
            if($this->on){
                return $this->speed . ", " . $this->color . ", " . $this->radius . ", " . "fan is on";
            }else{
                return $this->color . ", " . $this->radius . ", " . "fan is off";
            }
        }
        public function __construct($speed, $on, $radius, $color)
        {
            $this->speed = $speed;
            $this->on = $on;
            $this->radius = $radius;
            $this->color = $color;
        }
    }
?>