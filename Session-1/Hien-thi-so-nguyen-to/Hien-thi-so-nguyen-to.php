<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $limit = $_POST["limit"];
        $amount = $_POST["amount"];
    }
    var_dump($amount);
    static $count = 0;

    function isPrime($number){
        if($number<2){
            return false;
        }else{
            $j = sqrt($number);
            for($i=2; $i<=$j; $i++){
                if($number % $i == 0){
                    return false;
                }
            }
            return true;
        }
    }

    function displayPrimeLimit($limit){
        echo "Các số nguyên tố là: ";
        for ($i = 2; $i <= $limit; $i++) {
            if (isPrime($i)) {
                echo $i . ", ";
            }
        }
    }

    function displayPrimeAmount($amount){
        echo "Các số nguyên tố là: ";
        global $count;
        for ($i = 2; $count < $amount; $i++) {
            if (isPrime($i)) {
                echo $i . ", ";
                $count ++;
            }
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
        <input type="number" name="limit" placeholder="Nhập giới hạn SNT">
        <button type="submit">Hiển thị</button>
    </form>
    <?php displayPrimeLimit($limit); ?>
    <form method="post">
        <br/>
        <input type="number" name="amount" placeholder="Nhập số lượng SNT">
        <button type="submit">Hiển thị</button>
    </form>
    <?php displayPrimeAmount($amount); ?>
</body>
</html>