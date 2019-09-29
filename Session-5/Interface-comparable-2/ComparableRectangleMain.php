<?php
    include "ComparableRectangle.php";

    $rectangleOne = new ComparableRectangle("rectangle 1", 4, 5);
    $rectangleTwo = new ComparableRectangle("rectangle 2", 2, 3);

    var_dump($rectangleTwo->compareTo($rectangleOne));
?>