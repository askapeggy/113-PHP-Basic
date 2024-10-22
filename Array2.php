<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
    <?php
        $number = [];
        $count = 0;
        //初始亂數
        srand(time());
        while($count < 6)
        {
            $N = rand(1, 38);
            if (!in_array($N, $number)) 
            {
                $number[] = $N; // 如果不重複，則將隨機數添加到陣列中
                $count++; // 增加計數
            } 
        }
        $count = 0;
        echo join(", ", $number); //輸出矩陣中內容加入 ,
        /*
        foreach($number as $dat)
        {
            echo $dat;
            if($count != 5)
            {
                echo ",";
            }
            $count ++;
        }
            */
    ?>
    <h2>找出五百年內的閏年</h2>
    <?php
        $yearData = [];
        $yearInit = 2024;
        for($i = 0; $i < 500; $i++)
        {
            $year = $yearInit + $i;
            if((($year%4) == 0) && (($year%100) != 0 || ($year%400) == 0))
            {
                $yearData[] = $year;
                //$data ="閏年";
            }
        }
        //顯示
        echo "閏年:<br>";
        foreach($yearData as $dat)
        {
            echo $dat."<br>";
        }
    ?>
    <h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份</h2>
    <?php
        /*
        $sky = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
        $land = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
        $yearBase = 1024; //甲子年
        $yearIn = 2024;
        $skyCount  = ($yearIn-$yearBase)%count($sky);
        $landCount = ($yearIn-$yearBase)%count($land);
        if($yearIn < $yearBase)
        {
            if($skyCount != 0)
                $skyCount = count($sky) - (abs($skyCount)%count($sky));
            if($landCount != 0)
                $landCount = count($land) - (abs($landCount)%count($land));
        }
        echo  $sky[$skyCount].$land[$landCount];
        */
        $sky = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
        $land = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
        $skyland = array_fill(0, 60, 0);
        $count = 0;
        //使用矩陣把60年天干地支放入
        for($i = 0; $i < count($sky); $i ++)
        {
            $count = $i;
            for($j = 0; $j < 6; $j++)
            {
                $skyland[$i+($j*10)] = $sky[$i].$land[$count];
                $count +=10;
                $count = $count%count($land);
                echo $count."<br>";
            }
        }
        echo "<br>";
        echo join(", ", $skyland);
        echo "<br>";
        $yearBase = 1024; //甲子年
        $yearIn = 1000;
        $yearOut = ($yearIn-$yearBase)%count($skyland);
        if($yearIn < $yearBase)
        {
            $yearOut = count($skyland) - (abs($yearOut)%count($skyland));
        }
        echo $yearIn."==>".$skyland[$yearOut];
        //echo $yearOut;
    ?>
    <h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>
    <?php
        $a=[2,4,6,1,8];
        $b=[];
        for($i = 0; $i < count($a); $i++)
        {
            $b[] = $a[$i];
        }
        $j = count($a)-1;
        for($i = 0; $i < count($b); $i++)
        {
            $a[$j] = $b[$i];
            $j --;
        }
        //rsort($a);
        echo join(", ", $a);
    ?>
</body>
</html>