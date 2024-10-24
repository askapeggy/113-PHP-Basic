<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $testA = "aaddw1123";
        $testB = "*********";
        $testOK = "";
        $s = "this,is,a,book";
        $s1 = "the reason why a great man is great is that he resolves to be a great man";
        $sChine = "偉大之所以偉大，是因為他決心成為一個偉大的人";

        echo "<h1>字串取代</h1>";
        //$testOK = str_replace($testA, $testB, $testA);
        //$testOK = str_replace(['a', 'd', 'w','1', '2', '3'], "*", $testA);
        $testOK = str_repeat("*", mb_strlen($testA));
        echo $testOK."<br>";

        echo "<h1>字串分割</h1>";
        $sItem = explode(",", $s);
        echo "<pre>";
        print_r($sItem);
        //echo join(", ",array_reverse($sItem))."<br>";
        echo "</pre>";
        /*
        $testOK = "";
        foreach($sItem as $dat)
        {
            $testOK = $testOK.$dat." ";
        }
            */
        $testOK = join(" ", $sItem);
        echo $testOK."<br>";

        echo "<h1>字串取用</h1>";
        /*
        $myNew = substr($s1, 0, 10);
        $myNew = $myNew."...";
        */
        $myNew = substr($s1, 0, 10)."...";
        echo $myNew."<br>";
        $myNew = mb_substr($sChine, 0, 10)."...";
        echo $myNew."<br>";
    ?>
    <h1>尋找字串與HTML、css整合應用</h1>
    <ul>
        <il>給定一個句子，將指定的關鍵字放大</il>
        <il>學會PHP網頁程式設計，薪水會加倍，工作會好找</il>
        <il>請將上句中的 “程式設計” 放大字型或變色</il>
    </ul>
    <?php
        $str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
        $key = "程式設計";
        $large ="<span style='font-size: 28px; color: blue;'>".$key."</span>";
        $str = str_replace($key, $large, $str);
        echo $str."<br>";
    ?>
</body>
</html>