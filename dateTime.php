<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>給定兩個日期，計算中間間隔天數</h1>
    <?php
    /*
        $d1 = new Datetime("2024-10-20");
        $d2 = new Datetime("2024-10-23");
        $dSub = $d2->diff($d1);
        echo ($dSub->days+1);
        */
        date_default_timezone_set("Asia/Taipei");
        $start = "2024-10-01";
        $end = "2024-10-30";
        $startTime = strtotime($start);
        echo "開始時間:".$startTime."<br>";
        $endTime = strtotime($end);
        echo "結束時間".$endTime."<br>";
        $sub = $endTime-$startTime;
        echo "差距秒:".$sub."<br>";
        $day = $sub/(60*60*24);
        echo "差幾天:".$day."<br>";
    ?>
    <h1>計算距離自己下一次生日還有幾天</h1>
    <?php
        $d1 = time();
        $d2 = strtotime("2025-08-03");
        $dSub = $d2-$d1;
        $day = $dSub/(60*60*24);
        echo "差幾天:".$day."<br>";
    ?>
    <h1>利用date()函式的格式化參數，完成以下的日期格式呈現</h1>
    2021/10/05
    <ul>
        <li>2021/10/05/<li>
        <li>10月5日 Tuesday</li>
        <li>2021-10-5 12:9:5</li>
        <li>2021-10-5 12:09:05</li>
        <li>今天是西元2021年10月5日 上班日(或假日)</li>
    </ul>
    <br>
    <?php
        $str = "星期";
        $w = [' ', '一', '二', '三', '四', '五', '六', '日'];
        echo date('Y/m/d')."<br>";
        echo date('m月d日 l' )."<br>";
        $str = date('m月d日 ').$str.$w[date('N')];
        echo $str."<br>";
        echo date('Y-m-d H:i:s' )."<br>";
        echo date('Y-m-d G:i:s' )."<br>";
        $r = date('N');
        echo $r."<br>";
        $str = "今天是西元".date('m月d日 ');
        if($r == 7 || $r == 6)
        {
            $str = $str."假日";
        }else
        {
            $str = $str."上班日";
        }
        echo $str."<br>";
    ?>
    <h1>利用迴圈來計算連續五個周一的日期</h1>
    <?php
        $str = "星期";
        $w = [' ', '一', '二', '三', '四', '五', '六', '日'];
        for($i = 0; $i <5; $i++)
        {
            $timestamp = strtotime("+$i weeks". date("Y-m-d"));
            echo date("Y-m-d", $timestamp);
            echo "&nbsp";
            $timestamp = date('N');
            echo $str.$w[$timestamp];
            echo "<br>";
        }
    ?>
    <h1>線上月曆製作</h1>
    <style>
        table{
            border-collapse:collapse;
        }
        td{
            padding:5px 10px;
            text-align:center;
            border:1px solid #999;
        }
    </style>
    <table>
        <tr>
            <td> </td>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
    <?php
        //先取得月份第一天星期
        $year = 2024;
        $month = 10;
        $daysInMonth = date("t");
        $timestamp = strtotime($year."-".$month."-01");
        $w = date("N", $timestamp);
        $count = 1;
        echo $month."月";
        for($i = 0; $i < 6; $i++)                    
        {
            echo "<tr>";
            echo "<td>";
            echo $i+1;
            echo "</td>";
            for($j=0; $j < 7; $j++)
            {
                echo "<td>";
                /*
                if($w == 0)
                {
                    if($count <= $daysInMonth)
                    {
                        echo $count;
                    }
                    $count = $count + 1;
                }else
                {
                    $w = $w - 1;
                }
                    */
                $dayNum = ($i*7) + $j+1 - $w;
                if($dayNum <= $daysInMonth && $dayNum > 0)
                {
                    echo $dayNum;
                }
                echo "</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>