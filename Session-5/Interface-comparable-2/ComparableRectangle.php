<?php
    include "Rectangle.php";
    include "Comparable.php";

    class ComparableRectangle extends Rectangle implements Comparable {
        public function __construct($name, $width, $height)
        {
            parent::__construct($name, $width, $height);
        }

        public function compareTo($rectangleOther)
        {
            $rectangleOtherArea = $rectangleOther->area();

             if($this->area() > $rectangleOtherArea){
                 return 1;
             }elseif ($this->area() < $rectangleOtherArea){
                 return -1;
             }else{
                 return 0;
             }
        }
    }
?>