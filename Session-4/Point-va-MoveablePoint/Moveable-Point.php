<?php
    include_once "Class-Point.php";
    Class MoveablePoint extends Point{
        public $xSpeed;
        public $ySpeed;
        public function __construct($x, $y, $xSpeed, $ySpeed)
        {
            parent::__construct($x, $y);
            $this->xSpeed = $xSpeed;
            $this->ySpeed = $ySpeed;
        }
        public function getXSpeed(){
            return $this->xSpeed;
        }
        public function setXSpeed($xSpeed){
            $this->xSpeed = $xSpeed;
        }
        public function getYSpeed(){
            return $this->ySpeed;
        }
        public function setYSpeed($ySpeed){
            $this->ySpeed = $ySpeed;
        }
        public function getSpeed(){
            return [$this->xSpeed, $this->ySpeed];
        }
        public function setSpeed($xSpeed, $ySpeed){
            $this->xSpeed = $xSpeed;
            $this->ySpeed = $ySpeed;
        }
        public function toString()
        {
            return "($this->x; $this->y), speed = ($this->xSpeed, $this->ySpeed)";
        }
        public function move(){
            $this->x += $this->xSpeed;
            $this->y += $this->ySpeed;
            return $this;
        }
    }