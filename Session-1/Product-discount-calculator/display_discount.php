<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $product = $_POST["product"];
        $listPrice = $_POST["price"];
        $percent = $_POST["percent"];
    }
    $discountAmount = $listPrice * $percent * 0.1;
    $discountPrice = $listPrice - $discountAmount;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ứng dụng product discount calculator</title>
</head>
<body>
    <div>
        <h1>Product Discount Calculator</h1>
        <label>Product Description: </label>
        <span><?php echo $product ?></span><br/>
        <label>Price: </label>
        <span><?php echo '$'.$listPrice ?></span><br/>
        <label>Discount Percent: </label>
        <span><?php echo $percent.'%' ?></span><br/>
        <label>Discount Amount: </label>
        <span><?php echo '$'.$discountAmount ?></span><br/>
        <label>Discount Price: </label>
        <span><?php echo '$'.$discountPrice ?></span><br/>
    </div>
</body>
</html>