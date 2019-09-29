<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $money = $_POST["currency"];
        $from = $_POST["from"];
        $to = $_POST["to"];
    }
    function convert(){
        global $money;
        global $from;
        global $to;
        $result = $money * $to / $from;
        return $result;
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
        <input type="text" name="currency" placeholder="Nhập số tiền">
        <label>From</label>
        <select name="from">
            <option value="1">USD</option>
            <option value="23000">VND</option>
        </select>
        <label>To</label>
        <select name="to">
            <option value="23000">VND</option>
            <option value="1">USD</option>
        </select>
        <button type="submit">Convert</button>
    </form>
    <?php echo convert() ?>
</body>
</html>
