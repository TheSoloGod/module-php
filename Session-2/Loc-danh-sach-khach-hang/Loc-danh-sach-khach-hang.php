<?php
    $customer_list = array(
        "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "image" => "images/img1.jpg"),
        "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang", "image" => "images/img2.jpg"),
        "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định", "image" => "images/img3.jpg"),
        "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây", "image" => "images/img4.jpg"),
        "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội", "image" => "images/img5.jpg")
    );
    function searchByDate($customer, $from_date, $to_date){
        if(empty($from_date) && empty($to_date)){
            return $customer;
        }
        $filtered_customer = [];
        for($i=0; $i<count($customer); $i++){
            if(!empty($from_date) && (strtotime($customer[$i]["day_of_birth"]) < strtotime($from_date)))
                continue;
            if(!empty($to_date) && (strtotime($customer[$i]["day_of_birth"]) > strtotime($to_date)))
                continue;
            $filtered_customer[] = $customer[i];
        }
        return $filtered_customer;
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $from_date = NULL;
        $to_date = NULL;
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $from_date = $_POST["from"];
            $to_date = $_POST["to"];
        }
        $filtered_customer = searchByDate($customer_list, $from_date, $to_date);
    ?>

    <form method="post">
        Từ: <input id = "from" type="text" name="from" placeholder="yyyyy/mm/dd"
        value="<?php echo isset($from_date)?$from_date:''; ?>"/>
        Đến: <input id = "to" type="text" name="to" placeholder="yyyy/mm/dd"
        value="<?php echo isset($to_date)?$to_date:''; ?>"/>
        <input type = "submit" id = "submit" value = "Lọc"/>
    </form>

    <table border="0">
        <caption><h2>Danh sách khách hàng</h2></caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <?php for($i=0; $i<count($filtered_customer); $i++): ?>
            <tr>
                <td><?php echo $i +1; ?></td>
                <td><?php echo $filtered_customer[$i]["name"]; ?></td>
                <td><?php echo $filtered_customer[$i]["day_of_birth"]; ?></td>
                <td><?php echo $filtered_customer[$i]["address"]; ?></td>
                <td><div class="profile"><img src="<?php echo $filtered_customer[$i]['image']; ?>"/></div></td>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
