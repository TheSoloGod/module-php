<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $char = $_POST["char"];
        $str = "Mot con vit xoe ra hai cai canh";
        function findChar($string, $character){
            $count = 0;
            for($i=0; $i<strlen($string); $i++){
                if($string[$i] == $character){
                    $count ++;
                }
            }
            return $count;
        }
        $result = findChar($str, $char);
        var_dump($result);
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
        <input type="text" name="char" placeholder="Nhập kí tự">
        <button type="submit">Find</button>
    </form>
</body>
</html>
