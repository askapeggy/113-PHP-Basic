<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>建立一個學生成績陣列</h1>
    <table style="border=1">
    <?php
    /*
        $tite = ["&nbsp", "國文", "英文", "數學", "地理", "歷史"];
        $judy = ["judy", 95, 64, 70, 90, 84];
        $amo = ["amo", 88, 78, 54, 81, 71];
        $john = ["john", 45, 60, 68, 70, 62];
        $peter = ["peter", 59, 32, 77, 54, 42];
        $hebe = ["hebe", 71, 62, 80, 62, 64];
        $totalData = [$tite, $judy, $amo, $john, $peter, $hebe];
        */
        $totalData = [
            ["&nbsp", "國文", "英文", "數學", "地理", "歷史"],
            ["judy", 95, 64, 70, 90, 84],
            ["amo", 88, 78, 54, 81, 71],
            ["john", 45, 60, 68, 70, 62],
            ["peter", 59, 32, 77, 54, 42],
            ["hebe", 71, 62, 80, 62, 64],
        ];  
        foreach($totalData as $dataArray)
        {
            echo "<tr>";
            foreach($dataArray as $value)
            {
                echo "<td>".$value."</td>";
            }
            echo "</tr>";        
        }

        $colors = array("A"=>"red", "B"=>"green", "C"=>"blue", "D"=>"yellow"); 

        foreach ($colors as $x=>$y) {
          echo "Key:".$x."<br>";
          echo "V:".$y."<br>";
        }
    ?>
    <br>
    <h2>利用程式來產生陣列</h2>
    <ul>
        <li>以迴圈的方式產生一個九九乘法表</li>
        <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
        <li>再以迴圈方式將陣列內容印出</li>
    </ul>
    <?php
        $mul= [];
        $count = 0;
        for($i=1; $i<=9; $i ++)
        {
            for($j=1; $j<=9; $j++)
            {
                // echo "$i X $j = ";
                // echo $i*$j;
                // echo ",";
                $mul[] = $i."X ".$j." = ".($i*$j);
            }
            echo "<br>";
        }
        /*
        echo "<pre>"; //顯示原來的結構
        print_r($mul);
        echo "</pre>";
        */
        //顯示出來
        echo "<br>";echo "<br>";echo "<br>";
        echo "<table border=1px>";
        foreach($mul as $idex => $data)
        {
            $v = explode("=", $data)[1]; //分隔字串  回傳矩陣 1 的資料
            if($idex%9 == 8)
            {
                echo "<td>".$v."</td></tr>";
            }else if($idex%9 == 0)
            {
                echo "<tr><td>".$v."</td>";
            }else
            {
                echo "<td>".$v."</td>";
            }
        }
        echo "</table>"
    ?>
    <h2>我改二維矩陣程式來產生陣列</h2>
    <?php
        $mul= [];
        for($i=1; $i<=9; $i ++)
        {
            for($j=1; $j<=9; $j++)
            {
                $mul[] = [
                    "formula" => $i."X".$j,
                    "value" => $i*$j,
                ];
            }
        }
        /*
        echo "<pre>"; //顯示原來的結構
        print_r($mul);
        echo "</pre>";
        */
        foreach($mul as $idx => $item)
        {
            echo $item["formula"]."=".$item["value"];
            if($idex%9 == 8)
            {
                echo "<br>";
            }
        }
    ?>
</body>
</html>