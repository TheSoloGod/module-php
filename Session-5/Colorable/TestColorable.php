<?php
    include_once "Colorable.php";
    include "Circle.php";
    include "Rectangle.php";
    include "Square.php";

    $array = [new Circle("circle-1", 3),
              new Rectangle("rectangle-1", 4, 5),
              new Square("square-1", 5),
              new Circle("circle-2", 6),
              new Rectangle("rectangle-2", 7, 8)];
    foreach ($array as $item){
        if($item instanceof Colorable){
            echo $item->howToColor();
            echo "<br>";
        }else{
            echo $item->area();
            echo "<br>";
        }
    }
?>