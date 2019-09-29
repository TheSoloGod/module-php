<?php
    include_once ("Colorable.php");
    class Square implements Colorable {
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
        public function howToColor()
        {
            echo "Color all four sides";
        }
    }

?>