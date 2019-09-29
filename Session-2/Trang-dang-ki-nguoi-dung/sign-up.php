<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["user"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        $mail = $_POST["mail"];

        $account = ["username" => $username,
                    "password" => $password,
                    "phone"    => $phone,
                    "mail"     => $mail    ];

        $myFile = "data.json";
        $arr_data = array();

        $jsondata = file_get_contents($myFile);

        $arr_data = json_decode($jsondata, true);

        array_push($arr_data,$account);

        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);


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
    <form>
        <input type="text" name="user" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="number" name="phone" placeholder="phone number">
        <input type="email" name="mail" placeholder="email">
        <button type="submit">Sign up</button>
    </form>

    <?php
        if(file_put_contents($myFile, $jsondata)) {
            echo 'Data successfully saved';
        }
        else
            echo "error";
    ?>
</body>
</html>