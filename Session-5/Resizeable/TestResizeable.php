<?php
    include_once "Resizeable.php";
    include "Circle.php";
    include "Rectangle.php";
    include "Square.php";

    $array = [new Circle("circle-1", 3),
              new Rectangle("rectangle-1", 4, 5),
              new Square("square-1", 5)];

    foreach ($array as $item){
        echo $item->area();
        echo "<br>";
        echo $item->resize(rand(1, 100));
        echo "<br>";
    }
?>