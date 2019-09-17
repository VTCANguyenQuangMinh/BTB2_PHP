<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $time = date("h");
        echo "<p>The hour in my PC is : $time</p>";
        if($time < "10")
        {
            echo "Have a good morning!";
        } elseif($time < "20")
        {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }

        $color = array("red", "orrange", "yellow", "green", "blue", "purple");
        echo "<hr><br>The color in the LGBT flag is: ";
        foreach($color as $cl)
        {
            echo $cl . " , ";
        }
        echo "<hr>";

        function sum($a, $b) {
            return $a + $b;
        }

        echo "10 + 1 tỷ = " . sum(10, 1000000000) . ";<br>";
        echo "20 + (-10) = " . sum(20, -10) . ";<br><hr>";

        $height = array("Minh" => "170", "Mạnh" => "175", "Duy" => "165");
        foreach($height as $ke=>$va)
        {
            echo "Chiều cao của " . $ke . " là: " . $va . "Cm;<br>";
        }

        echo "<hr>";

        function average($a, $b, $c) {
            return ($a + $b + $c)/3;
        }

        echo "Average of 3, 5, 11 is: " . average(3, 5, 11) . "<br><hr>";

        // define variables and set to empty values
        $nameErr = $nameErr2 = "";
        $name = $_POST["str"];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(palindrome($name)!==1)
            {
                $nameErr = "this string is not palindrome!";
            }else {
                $nameErr = "this string is palindrome!";
            }

            if(is_str_lowerCase($name) === true){
                $nameErr2 = "all letter in this string is lower case!";
            }else {
                $nameErr2 = "this string not all lower case!";
            }
        }

        function palindrome($data) {
            if($data == strrev($data))
            {
                return 1;
            }else{
                return 0;
            }
        }

        function is_str_lowerCase($data)
        {
            
            for($index = 0; $index<strlen($data); $index++)
            {
                if(ord($data[$index]) >= ord("A") && ord($data[$index]) <= ord("Z"))
                {
                    return false;
                }
            }

            return true;
        }

    ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Input some string: <input type="text" name="str">
        
        <input type="submit" name="submit" value="Check">  
        <br><br>
        <span style="color:red;">* <?php echo $nameErr;?></span>
        <span style="color:blue;">* <?php echo $nameErr2;?></span>
        </form>
        <hr>

    <?php 

        function content(){
            echo "<div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            float: left;
            margin: 10px;
            text-align: center;
            font-family: arial;'>";
            echo "<img src='https://tikicdn.com/media/catalog/product/u/n/untitled.u2470.d20160627.t173011.png' style='width:100%;height:auto;'";
            echo "<p>Máy ảnh Canon XS730hs (hàng nhập khẩu</p>";
            echo "<p><b>6.290.000đ</b> <span style='text-decoration: line-through;font-size: 13px; opacity: 0.5;'>7.870.000đ</span><span style='color:red;'> -18%</span></p>";
            echo "</div>";
        }
        echo "<div style='max-width: 80%;
        margin: auto;'>";
            for($i=0; $i<6; $i++)
            {
                content();
            }
        echo "<div>";
    ?>
</body>
</html>