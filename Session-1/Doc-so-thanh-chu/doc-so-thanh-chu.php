<?php
    $arrayNumber_0_to_12 = array(" ", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve");
    $arrayNumber_13_to_19 = array(" ", " ", " ", "thir", "four", "fif", "six", "seven", "eigh", "nine");
    $arrayNumber_20_to_99 = array(" ", " ", "twen", "thir", "for", "fif", "six", "seven", "eigh", "nine");
    $arrayNumberPoint = array(0, 12, 19, 99, 999);
    $display_Teen = "teen";
    $display_Ty = "ty ";
    $display_Hundred = " hundred";
    $display_And = " and ";
    $display_Number = "Number ";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $number = $_POST["number"];
    }

    function read_1_to_12($number){
        global $arrayNumber_0_to_12;
        return $arrayNumber_0_to_12[$number];
    }

    function read_13_to_19($number){
        global $arrayNumber_13_to_19;
        global $display_Teen;
        $chuSoHangDonVi = $number%10;
        return $arrayNumber_13_to_19[$chuSoHangDonVi] . $display_Teen;
    }

    function read_20_to_99($number){
        global $arrayNumber_0_to_12;
        global $arrayNumber_20_to_99;
        global $display_Ty;
        $chuSoHangChuc = floor($number/10);
        $chuSoHangDonVi = $number%10;
        return $arrayNumber_20_to_99[$chuSoHangChuc] . $display_Ty
            . $arrayNumber_0_to_12[$chuSoHangDonVi];
    }

    function readOneHundredToNineHundredNinetyNine($number){
        global $arrayNumber_0_to_12;
        global $arrayNumberPoint;
        global $display_Hundred;
        global $display_And;
        $chuSoHangTram = floor($number/100);
        $soHangChuc = ($number%100);

        if($soHangChuc <= $arrayNumberPoint[2]){
            if($soHangChuc <= $arrayNumberPoint[1]){
                return $arrayNumber_0_to_12[$chuSoHangTram] . $display_Hundred
                    . read_1_to_12($soHangChuc);
            }else{
                return $arrayNumber_0_to_12[$chuSoHangTram] . $display_Hundred . $display_And
                    . read_13_to_19($soHangChuc);
            }
        }else{
            return $arrayNumber_0_to_12[$chuSoHangTram] . $display_Hundred . $display_And
                . read_20_to_99($soHangChuc);
        }
    }

    if($number > $arrayNumberPoint[0] && $number <= $arrayNumberPoint[1]){
        echo $display_Number . read_1_to_12($number);
    }elseif ($number > $arrayNumberPoint[1] && $number <= $arrayNumberPoint[2]){
        echo $display_Number . read_13_to_19($number);
    }elseif ($number > $arrayNumberPoint[2] && $number <= $arrayNumberPoint[3]){
        echo $display_Number . read_20_to_99($number);
    }elseif ($number > $arrayNumberPoint[3] && $number <= $arrayNumberPoint[4]){
        echo $display_Number . readOneHundredToNineHundredNinetyNine($number);
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
        <input type="text" name="number" size="30">
        <button type="submit">Read number</button>
    </form>
</body>
</html>