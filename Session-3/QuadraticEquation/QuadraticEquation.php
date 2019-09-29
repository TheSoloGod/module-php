<?php
    include ("Class-QuadraticEquation.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        $quadraticEquation = new QuadraticEquation($a, $b, $c);
        $discriminant = $quadraticEquation->getDiscriminant();
        $r1 = $quadraticEquation->getRoot1();
        $r2 = $quadraticEquation->getRoot2();
        if($discriminant > 0){
            echo "Nghiem thu nhat la: " . $r1;
            echo "<br/>";
            echo "Nghiem thu hai la: " . $r2;
        }elseif ($discriminant == 0){
            echo "Nghiem kep la: " . $r1;
        }else{
            echo "PT vo nghiem";
        }
    }
?>