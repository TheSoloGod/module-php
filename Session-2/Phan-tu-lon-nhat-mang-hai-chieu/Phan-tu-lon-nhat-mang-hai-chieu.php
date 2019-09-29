<?php
    $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    $matrixWidth = 10;
    $matrixHeight = 10;

    function buildMatrix($array, $height, $width){
        $matrix = [];
        for ($i = 0; $i < $height; $i++) {
            $matrix[$i] = [];
            for ($j = 0; $j < $width; $j++) {
                $random = rand(0, count($array) - 1);
                $matrix[$i][$j] = $array[$random];
            }
        }
        return $matrix;
    }

    $matrix = buildMatrix($array, $matrixHeight, $matrixWidth);

    function findMax($array){
        $max = $array[0][0];
        $maxAndIndex = [];
        for($i=0; $i<count($array); $i++){
            for($j=0; $j<count($array[$i]); $j++){
                if($array[$i][$j] >= $max){
                    $max = $array[$i][$j];
                    $maxAndIndex[0] = $max;
                    $maxAndIndex[1] = $i;
                    $maxAndIndex[2] = $j
                    ;
                }
            }
        }
        return $max;
    }
    $result = findMax($matrix);
    var_dump($result);
?>