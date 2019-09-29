<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $index = $_POST["index"];

        function deleteArray($array, $index){
            if($index < count($array)){
                for ($i=$index; $i<count($array); $i++){
                    $array[$i] = $array[$i+1];
                }
                return $array;
            }
            return -1;
        }

        $array = array(1,2,3,4,5,6,7,8,9);
        var_dump(deleteArray($array, $index));
    }
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
        <input type="number" name="index" placeholder="Nhập phần tử cần xóa">
        <button type="submit">Delete</button>
    </form>
</body>
</html>
