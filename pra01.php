<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>流程練習</title>
</head>
<body>
    <h2>分配成績等級(上課最佳化作法)</h2>
    <h3>給定一個成績數字，根據成績所在的區間，給定等級</h3>
    <ul>
        <li>0 ~ 59 => E</li>
        <li>60 ~ 69 => D</li>
        <li>70 ~ 79 => C</li>
        <li>80 ~ 89 => B</li>
        <li>90 ~ 100 => A</li>
    </ul>
    <?php
        $score = 77;
        $leve = 'Z';
        //判斷成績
        if($score<=100 && $score>=0)
        {
            if($score < 60)
            {
                $leve = 'E';        
            }else if($score < 70)
            {
                $leve = 'D';        
            }else if($score < 80)
            {
                $leve = 'C';        
            }else if($score < 90)
            {
                $leve = 'B';        
            }else
            {
                $leve = 'A';        
            }
            echo "score:".$score;
            echo "<br>你的等級為:".$leve;
            switch($leve)
            {
                case 'A':
                    echo "<br>非常優秀";
                    break;
                case 'B':
                    echo "<br>優秀";
                    break;
                case 'C':
                    echo "<br>非常好";
                    break;
                case 'D':
                    echo "<br>好";
                    break;
                case 'E':
                    echo "<br>加油";
                    break;
            }
        }else
        {
            echo "score".$score;
            echo "<br>成績應該要在0~100之間";
        }
        echo "<br>";
    ?>
    <hr>
    <h2>分配成績等級(課程上作法)</h2>
    <?php
        $score = 75;
        $leve = ' ';
        if($score<=100 && $score>=0)
        {
            if($score >=90 && $score <=100)
            {
                $leve = "A";
            }else
            {
                if($score >=80 && $score <=89)
                {
                    $leve = "B";
                }else
                {
                    if($score >=70 && $score <=79)
                    {
                        $leve = "C";
                    }else
                    {
                        if($score >=60 && $score <=69)
                        {
                            $leve = "D";
                        }else
                        {
                            if($score >=0 && $score <=59)
                            {
                                $leve = "E";
                            }
                        }
                    }
                }
            }

            echo "score:".$score;
            echo "<br>你的等級為:".$leve;
        }else
        {
            echo "score".$score;
            echo "<br>成績應該要在0~100之間";
        }
    ?>


    <hr>
    <h1>閏年判斷，給定一個西元年份，判斷是否為閏年</h1>
    <hr>
    <?php
        $year = 2500;
        $data = "";
        if((($year%4) != 0) || (($year%100) == 0 && ($year%400) == 0))
        {
            $data ="平年";
        }else
        {
            $data ="閏年";
        }
        /*
        if((($year%4) == 0))
        {
            if(($year%100) == 0 && ($year%400) == 0)
            {
                $data ="平年";
            }else
            {
                $data ="閏年";
            }
        }else
        {
            $data ="平年";
        }
        */
        /*
        if(($year%4) != 0)
        {
            $data ="平年";
        }else
        {
            if(($year%100) == 0)
            {
                if(($year%400) == 0)
                {
                    $data ="平年";
                }else
                {
                    $data ="潤年";
                }
            }else
            {
                $data ="閏年";
            }
        }
        */
        echo "西元".$year."年";
        echo "<br>今年是:".$data;
    ?>
    <hr>
    <h1>使用for迴圈來產生以下的數列 1,3,5,7,9……n</h1>
    <?php
        $n = 50;
        for ($i=1; $i <= $n; $i+=2) 
        { 
            echo $i;
            if($i != 19)
            {
                echo ",";
            }
        }
    ?>
    <hr>
    <h1>使用for迴圈來產生以下的數列 10,20,30,40,50,60……n</h1>
    <?php
        $n = 100;
        for ($i=10; $i < $n; $i+=10) 
        { 
            echo $i;
            if($i != 90)
            {
                echo ",";
            }
        }
    ?>
    <hr>
    <h1>3,5,7,11,13,17……97</h1>
    <?php
        $n = 100;
        $count = 0;
        for ($i=3; $i <= $n; $i += 2) 
        { 
            /*
            $tr = 1;
            for($j=2; $j < $i>>1; $j++)
            {
                if($i % $j == 0)
                {
                    $tr = 0;
                    $j = $i;
                }
                $count++;
            }
            if($tr == 1)
            {
                echo $i.",";
            }
                */
            // 小於 2 的數字不是質數
            $tr = -1;
            if ($i < 2) 
            {
                $tr = 0;
            }
            // 2 是質數
            if ($i == 2) 
            {
                $tr = 1;
            }else
            {
                // 排除偶數
                if ($i % 2 == 0) 
                {
                    $tr = 0;
                }
            }
            // 檢查從 3 開始到平方根的數字
            for ($k = 3; $k <= sqrt($i); $k += 2) 
            {
                if ($i % $k == 0) 
                {
                    $tr = 0;
                    break;
                }
                $count++;
            }
            if($tr == -1)
            {
                $tr = 1;
            }
            if($tr != 0)
            {
                echo $i.",";
            }
        }
        echo "<br>".$count.",";
    ?>
    <hr>
    <h1>以表格排列的九九乘法表</h1>
    <table border=1>
    <?php
        for($i = 1; $i < 10; $i ++)
        {
            echo "<tr>";
            for($k = 1; $k < 10; $k ++)
            {
                /*
                if(($k*$i) < 10)
                {
                    echo $k."*".$i."=".($k*$i).str_repeat("&nbsp;", 6);
                }else
                {
                    echo $k."*".$i."=".($k*$i).str_repeat("&nbsp;", 4);
                }
                    */
                echo "<td>".$k."*".$i."=".($k*$i)."</td>";
            }
            echo "</tr>";
            //echo "<br>";
        }
    ?>
    </table>
    <hr>
    <h1>以交叉計算結果呈現的九九乘法表</h1>
    <style>
        .nine{
            border-collapse:collapse;
            margin:20px;
        }
        .nine td {
            border: 1px solid #aaa;
            width: 30px;
            height: 30px;
            text-align: center;
        }
        .nine tr:nth-child(1),
        .nine td:nth-child(1){
            background:blue;
            color:white;
        }
    }
    </style>
    <?php
        $n = 10;
        //先畫上面表格
        echo "<table class='nine'>";
        echo "<tr>";
        for($i = 0; $i < $n; $i++)
        {
            if($i == 0)
            {
                $d = " ";
            }else
            {
                $d = $i;
            }
            echo "<td>{$d}</td>";
        }
        echo "</tr>";

        for($i = 1; $i < $n; $i++)
        {
            echo "<tr>";
            echo "<td>".$i."</td>";
            for($k = 1; $k < $n; $k++)
            {
                echo "<td>".($i*$k)."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <hr>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
    <h1>直角三角型</h1>
    <?php
        $n = 10;
        for($i=1; $i < $n; $i++)
        {
            for($j = 0; $j < $i; $j++)
            {
                echo "*";
            }
            echo "<br>";
        }
    ?>
    <hr>
    <h1>倒直角三角型</h1>
    <?php
        $n = 10;
        for($i=$n-1; $i > 0; $i--)
        {
            for($j = 0; $j < $i; $j++)
            {
                echo "*";
            }
            echo "<br>";
        }
    ?>
    <hr>
    <h1>正三角型</h1>
    <?php
        $n=5;
        for($i=0; $i < $n; $i++)
        {
            for($j = 0; $j < $n-($i+1); $j ++)
            {
                echo "&nbsp;";    
            }
            for($j = 0; $j < (($i*2)+1); $j++)
            {
                echo "*";
            }
            echo "<br>";
        }
    ?>
    <hr>
    <h1>倒正三角型</h1>
    <?php
        $n=5;
        for($i=($n-1); $i > -1; $i--)
        {
            for($j = 0; $j < $n-($i+1); $j ++)
            {
                echo "&nbsp;";    
            }
            for($j = 0; $j < (($i*2)+1); $j++)
            {
                echo "*";
            }
            echo "<br>";
        }
    ?>
    <h1>菱型</h1>
    <?php
        $n = 31;
        $t = $n >> 1;
        for($i = 0; $i < $n; $i++)
        {
            if($i>$t)
            {
                $k1 = $i - $t;
                $j1 = 2*($i-(2*($i- $t)))+1;
            }else
            {
                $k1 = $t - $i;
                $j1 = (($i<<1)+1);
            }
            for($k = 0; $k < $k1; $k++)
            {
                echo "&nbsp;";
            }
            for($j = 0; $j < $j1; $j++)
            {
                echo "*";
            }
            echo "<br>";
        }
    ?>
    <br>
    <h1>菱型 對角線</h1>
    <?php
        $n = 50;
        if(($n%2) != 0)
        {
            $n = $n+1;
        }
        if($n < 3)
        {
            echo "數字小於3 強迫等於3<br>";
        }
        $t = $n >> 1;
        for($i = 0; $i <= $n; $i++)
        {
            $t1 = 0;
            if($i>$t)
            {
                $k1 = $i - $t;
                $j1 = (($i-(($i - $t)<<1))<<1)+1;
            }else
            {
                $k1 = $t - $i;
                $j1 = (($i<<1)+1);
            }
            for($k = 0; $k < $k1; $k++)
            {
                $t1 ++;
                echo "&nbsp;";
            }
            for($j = 0; $j < $j1; $j++)
            {
                $t1 ++;
                if($j == 0 || $j == ($j1-1) || ($i == $t) || ($t1 == ($t+1)))
                {
                    echo "*";
                }else
                {
                    echo "&nbsp;";
                }
            }
            echo "<br>";
        }
    ?>
    <br>
    <h1>矩形練習</h1>
    <?php
        $n=10;
        for($i = 0; $i < $n; $i++)
        {
            echo "*";
            if($i == 0 || $i == ($n-1))
            {
                $t = '*';
            }else
            {
                $t = '&nbsp;';
            }
            echo str_repeat($t, ($n-2));
            echo "*<br>";
        }
    ?>
    <br>
    <h1>內含對角線的矩形</h1>
    <?php
        $n=21;
        for($i=0 ; $i<$n ; $i++)
        {
            for( $j=0 ; $j<$n ; $j++ )
            {
              //if($i==0 || $i==($n-1))
              if(($i==0 || $i==($n-1)) || ($j==0 || $j==($n-1) || $j==$i || $j==(($n-1)-$i)))
              {
                echo "*";
                //前面畫框 $j==0 || $j==($m-1)  --->後面畫交叉$j==$i || $j==(($m-1)-$i)
              //}else if($j==0 || $j==($n-1) || $j==$i || $j==(($n-1)-$i))
              //{
                //echo "*";
              }else
              {
                echo "&nbsp;";
              }
            }
            echo "<br>";
          }
    ?>
</body>
</html>