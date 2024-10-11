<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式語言基礎 / github 操作練習</title>
</head>
<body style='text-align:center'>
    <?php
        define("PI",3.1415);
        $price = 100;
        $mul = 123;
        $name = "陳志祥";
        $regData = "<br>";
        $regNumber = $price*PI;
        echo $name.$regData.$regNumber;
        echo "<br>";
        $mul = rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49);
        echo $mul;
        $mul = 10000;
        echo "<br>";
        echo $mul;
        echo "<br>";
        echo "圓周率".PI;
        echo "<br>";
        /*
        if($price === 1000)
            echo "測試";
        else
            echo "亂搞";
        */
    ?>
    <h1>練習1</h1>
    <?php
        $a = 10;
        $b = 50;
        echo "我是一開始的A=".$a;
        echo "<br>";
        echo "我是一開始的B=".$b;
        echo "<br>";
        $c = $b;
        $b = $a;
        $a = $c;

        echo "我是交換後的A=".$a;
        echo "<br>";
        echo "我是交換後的B=".$b;
        
    ?>
    <h1>練習1</h1>
    <?php
    ?>
</body>
</html>


