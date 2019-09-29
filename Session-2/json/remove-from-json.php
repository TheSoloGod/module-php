<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include_once "Class-json.php";
        if(!empty($_POST["index"])){
            $index = $_POST["index"];

            $json = new Json('data.json');
            $json->getContent();
            $json->jsonDecode();

            $json->removeElement($index);
            $json->jsonEncode();

            if($json->pushContent()){
                echo "Xoa thanh cong";
            }else{
                echo "That bai";
            }
        }else{
            echo "Nhap phan tu can xoa";
        }

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
        <input type="number" name="index" placeholder="index">
        <button type="submit">Remove</button>
    </form>
    <a href='index.php'>Menu</a>
</body>
</html>