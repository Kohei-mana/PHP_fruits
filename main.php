<?php
    require_once("peach.php");
    // $peach1 = new Peach();
    // echo $peach1->name . '<br/>';
    // echo $peach1->price;
    $pArray = [];
    for($i =0; $i <= 14; $i++){
        $peach[$i] = new Peach();
        array_push($pArray, $peach[$i]->price);
        echo '<br/>';
        echo 'もも' . $i+1 . ' 価格：'. $pArray[$i];
    }
    echo '<br/>';
    echo '<br/>'. '最高値：' . max($pArray);
    echo '<br/>'. '最低値：' . min($pArray);
    echo '<br/>'. '平均価格：' . array_sum($pArray)/count($pArray);
    echo '<br/>';

    require_once("strawberry.php");
    $sArray = [];
    for($i =0; $i <= 14; $i++){
        $strawberry[$i] = new Strawberry();
        array_push($sArray, $strawberry[$i]->price);
        echo '<br/>';
        echo 'いちご'. $i+1 . ' 価格：'. $sArray[$i];
    }
    echo '<br/>';
    echo '<br/>'.'最高値：' . max($sArray);
    echo '<br/>'.'最低値：' . min($sArray);
    echo '<br/>'.'平均価格：' . array_sum($sArray)/count($sArray);

?>