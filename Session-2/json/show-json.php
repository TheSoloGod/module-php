<?php
    include_once "Class-json.php";

    $json = new Json('data.json');
    $showJson = $json->getArrayData();

    echo "<a href='index.php'>Menu</a>";

    echo "<pre>";
    print_r($showJson);
    echo "</pre>";
?>