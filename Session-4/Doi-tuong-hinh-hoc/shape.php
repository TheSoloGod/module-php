<?php
    include_once ('Circle.php');
    include_once ('Cylinder.php');
    include_once ('Rectangle.php');
    include_once ('Square.php');

    $circle = new Circle('Circle 01', 3);
    echo 'Circle area: ' . $circle->area() . '<br />';
    echo 'Circle perimeter: ' . $circle->perimeter() . '<br />';

    $cylinder = new Cylinder('Cylinder 01', 3 , 4);
    echo 'Cylinder area: ' . $cylinder->area() . '<br />';
    echo 'Cylinder perimeter: ' . $cylinder->perimeter() . '<br />';

    $rectangle = new Rectangle('Rectangle 01', 3 , 4);
    echo 'Rectangle area: ' . $rectangle->area() . '<br />';
    echo 'Rectangle perimeter: ' . $rectangle->perimeter() . '<br />';

    $square = new Square('Square 01', 4 , 4);
    echo 'Rectangle area: ' . $square->area() . '<br />';
    echo 'Rectangle perimeter: ' . $square->perimeter() . '<br />';
?>