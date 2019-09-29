<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once "Class-json.php";
        if (!empty($_POST["username"] && !empty($_POST["password"]) && !empty($_POST["index"]))) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $index = $_POST["index"];

            $json = new Json('data.json');
            $json->getContent();
            $json->jsonDecode();

            $account = [
                'username' => $username,
                'password' => $password
            ];

            $json->arrayData[$index] = $account;
            $json->jsonEncode();

            if($json->pushContent()){
                echo "Sua thanh cong";
            }else{
                echo "That bai";
            }
        } else {
            echo "Nhap thong tin moi";
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
        <input type="text" name="index" placeholder="index">
        <input type="text" name="username" placeholder="user name">
        <input type="text" name="password" placeholder="password">
        <button type="submit">Edit</button>
    </form>
    <a href="index.php">Menu</a><br>
</body>
</html>
