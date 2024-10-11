<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重複結構</title>
</head>
<body>
<h1>for loop</h1>
    <?php
        for($i = 0; $i < 10; $i++)
        {
            echo ($i*10)."<br>";
        }
        echo "<br>";
    ?>
<h1>while</h1>
    <?php
        $reg = 0;
        while($reg < 10)
        {
            $reg++;
        }
        echo ($reg)."<br>";

        $reg = 20;
        do{
            $reg --;
        }while($reg != 0);
        echo ($reg)."<br>";
    ?>
<h1>foreach</h1>
    <?php
        $reg_array = ["A","B","C","D","E","F","G","H","I","K"];
        foreach($reg_array as $reg_index => $val)
        {
            echo "foreach  第".$reg_index."個資料:".$val."<br>";
        }
        $regcount = count($reg_array);      //取得陣列資料數量
        $regcount1 = sizeof($reg_array);    //取得陣列資料數量
        ////////////////////////////////////////////////////////////////
        echo "目前全部數量{$regcount}個<br>";
        for($i = 0; $i < $regcount; $i++)
        {
            echo "for   第".$i."個資料:".$reg_array[$i]."<br>";                
        }
        ////////////////////////////////////////////////////////////////
        $regarray = array("A1"=>"A", "A2"=>"B", "A3"=>"C", "A4"=>"D");
        //$regarray = ["A1"=>"A", "A2"=>"B", "A3"=>"C", "A4"=>"D"];
        $regcount = count($regarray);
        echo "目前全部數量{$regcount}個<br>";
        foreach($regarray as $aska => $askaVal)
        {
            echo "第".$aska."個資料:".$askaVal."<br>";
        }
        echo "自己取資料:".$regarray["A3"]."<br>";
        ////////////////////////////////////////////////////////////////
        //取出所有KEY值
        $keysVal = array_keys($regarray);
        print_r($keysVal);
        $keyscount =count($keysVal);
        echo "<br>"."total Keys:".$keyscount."<br>";
        for($i = 0; $i < $keyscount; $i++)
        {
            echo "Key:".$keysVal[$i]."<br>";
        }
    ?>
    <h1>巢狀流程</h1>
    <?php
        echo "執行10次<br>";
        for ($i=0; $i < 10; $i++) 
        { 
            if($i ==5)
            {
                echo "執行一半了<br>";
            }
        }
        echo "執行結束<br>";
    ?>
    <h1>質數</h1>
    <?php
        for($i = 1; $i < 100; $i++)
        {
            $mOk = -1;

            if($i <= 2)
            {
                if($i <= 1)
                {
                    $mOk = 0;
                }
                if($i == 2)
                {
                    $mOk = 1;
                }
            }else
            {
                // 排除偶數
                if ($i % 2 == 0) 
                {
                    $mOk = 0;
                }else
                {
                    $mOk = 1;
                    $sqrtN = sqrt($i);
                    for ($i = 3; $i <= $sqrtN; $i += 2) {
                        if ($n % $i == 0) {
                            $mOk = 0; // 如果能被整除，則不是質數
                            break;
                        }
                    }
                }
            }
        }

        /*
        / 小於或等於 1 的數字不是質數
        if ($n <= 1) {
            return false;
        }
    
        // 2 是質數
        if ($n == 2) {
            return true;
        }
    
        // 排除偶數
        if ($n % 2 == 0) {
            return false;
        }
    
        // 檢查從 3 到 sqrt($n) 的奇數
        $sqrtN = sqrt($n);
        for ($i = 3; $i <= $sqrtN; $i += 2) {
            if ($n % $i == 0) {
                return false; // 如果能被整除，則不是質數
            }
        }
    
        return true; // 如果找不到因數，則是質數
        */

    ?>
</body>
</html>