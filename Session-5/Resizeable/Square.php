<?php
    include_once ("Resizeable.php");
    class Square implements Resizeable{
        public $name;
        public $edge;
        public function __construct($name, $edge)
        {
            $this->name = $name;
            $this->edge = $edge;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getEdge(){
            return $this->edge;
        }
        public function setEdge($edge){
            $this->edge = $edge;
        }
        public function area(){
            return pow($this->edge, 2);
        }
        public function resize($percent)
        {
            return $this->area() + ($this->area() * $percent/100);
        }
    }

?>