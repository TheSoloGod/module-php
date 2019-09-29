<?php
    include ('Class-StopWatch.php');

    $array = array();
    for($i=999999; $i>=0; $i--){
        array_push($array, $i);
    }

    function selectionSort($array){
        $stopWatch = new StopWatch();
        $sum = 0;
        for ($i=0; $i<count($array); $i++){
            $sum += $i;
        }
        $stopWatch->end();
        echo $sum;
        echo "<br/>";
        echo $stopWatch->getStartTime();
        echo "<br/>";
        echo $stopWatch->getEndTime();
        echo "<br/>";
        echo $stopWatch->getElapsedTime();
    }

    selectionSort($array);
?>