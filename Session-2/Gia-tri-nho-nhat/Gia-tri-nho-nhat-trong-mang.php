<?php
    $array = array(5, 3, 9, -1, 4, -2, 6);

    function findMin($array){
        $min = $array[0];
        $index = NULL;
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] < $min) {
                $array[$i] = $min;
                $index = $i;
            }
        }
        echo $index;
    }

    findMin($array);
?>