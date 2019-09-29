<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $invest = $_POST["invest"];
        $rate = $_POST["rate"];
        $year = $_POST["year"];
    }
    $futureValue = ($invest + ($invest * $rate)) * $year;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ứng dụng Future Value Calculator</title>
</head>
<body>
    <form method="post">
        <div>
            <label>Inventment Amount</label>
            <input type="text" name="invest" size="30">
            <br/>
            <label>Yearly Interest Rate</label>
            <input type="text" name="rate" size="30">
            <br/>
            <label>Number of Years</label>
            <input type="text" name="year" size="30">
            <br/>
        </div>
        <button type="submit">Calculate</button>
        <br/>
        <?php echo "Future Value: ".$futureValue ?>
    </form>
</body>
</html>
