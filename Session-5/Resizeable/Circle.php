<?php
    include_once ("Resizeable.php");
    class Circle implements Resizeable {
        public $name;
        public $radius;
        public function __construct($name, $radius)
        {
            $this->name = $name;
            $this->radius = $radius;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getRadius(){
            return $this->radius;
        }
        public function setRadius($radius){
            $this->radius = $radius;
        }
        public function area(){
            return pi() * pow($this->radius, 2);
        }
        public function resize($percent)
        {
            return $this->area() + ($this->area() * $percent/100);
        }
    }

?>