<?php
    $array_1 = array(1, 2, 3, 4);
    $array_2 = array(5, 6, 7, 8, 9);
    function mergeArray($array1, $array2){
        $array_3 = [];
        for ($i = 0; $i < count($array1); $i++) {
            $array_3[count($array_3)] = $array1[$i];
        }
        for ($j = 0; $j < count($array2); $j++) {
            $array_3[count($array_3)] = $array2[$j];
        }
        return $array_3;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $str_1 = $_POST["str_1"];
        $str_2 = $_POST["str_2"];
    }
    $arr_1 = explode(",",$str_1);
    $arr_2 = explode(",",$str_2);
    $result = mergeArray($arr_1, $arr_2);
    var_dump($result);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Nhập mảng thứ nhất</label>
        <input type="text" name="str_1" placeholder="Nhập mảng 1">
        <br/>
        <label>Nhập mảng thứ hai</label>
        <input type="text" name="str_2" placeholder="Nhập mảng 2">
        <br>
        <button type="submit">Gộp hai mảng</button>
    </form>
    <?php echo $result ?>
</body>
</html>