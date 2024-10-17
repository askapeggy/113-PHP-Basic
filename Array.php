<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>建立一個學生成績陣列</h1>
    <table border=1>
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
</body>
</html>