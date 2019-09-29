<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $number_1 = $_POST["number_1"];
        $number_2 = $_POST["number_2"];
    }
    $operator = $_POST["operator"];

    function calculate(){
        global $number_1;
        global $number_2;
        global $operator;
        switch ($operator) {
            case "+":
                $result = $number_1 + $number_2;
                echo "Tổng hai số là: " . $result;
                break;
            case "-":
                $result = $number_1 - $number_2;
                echo "Hiệu hai số là: " . $result;
                break;
            case "*":
                $result = $number_1 * $number_2;
                echo "Tích hai số là: " . $result;
                break;
            case "/":
                $result = $number_1 / $number_2;
                echo "Thương hai số là: " . $result;
                break;
        }
    }
    try{
        if($operator == "/" && $number_2 == 0){
            throw new Exception("So bi chia phai khac khong");
        }
    }
    catch (Exception $e){
        echo $e->getMessage();
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
        <h1>Simple Calculator</h1>
        <div>
            <label>First operand</label>
            <input type="number" size="30" name="number_1">
            <br/>
            <label>Operator</label>
            <select name="operator">
                <option value="+">Addition</option>
                <option value="-">Subtraction</option>
                <option value="*">Multiplication</option>
                <option value="/">Division</option>
            </select>
            <br/>
            <label>Second operand</label>
            <input type="number" size="30" name="number_2">
            <br/>
            <button type="submit">Calculate</button>
        </div>
    </form>
    <?php calculate(); ?>
</body>
</html>