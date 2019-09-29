<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once "Class-json.php";
        if (!empty($_POST["username"] && !empty($_POST["password"]))) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $json = new Json('data.json');
            $json->getContent();
            $json->jsonDecode();

            $account = [
                'username' => $username,
                'password' => $password
            ];

            $json->addElement($account);
            $json->jsonEncode();

            if($json->pushContent()){
                echo "Them thanh cong";
            }else{
                echo "That bai";
            }
        } else {
            echo "Nhap username va password";
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
        <input type="text" name="username" placeholder="user name">
        <input type="text" name="password" placeholder="password">
        <button type="submit">Sign Up</button>
    </form>
    <a href="index.php">Menu</a><br>
</body>
</html>
