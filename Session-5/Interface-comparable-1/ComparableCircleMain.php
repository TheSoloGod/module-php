<?php
    include "ComparableCircle.php";

    $circleOne = new ComparableCircle("circle 1", 8);
    $circleTwo = new ComparableCircle("circle 2", 2);

    var_dump($circleOne->compareTo($circleTwo));
?>