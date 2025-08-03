<?php
    include "config.php";

    echo "<h2>Server - ". ENVIRONMENT ."</h2>";

    echo "<br><hr><br>";
    echo "사이트 도메인 : ".$_SERVER['SERVER_NAME'];
    echo "<br><br>";
    echo "클라이언트 IP : ".$_SERVER['REMOTE_ADDR'];
    echo "<br><br>";
    echo "<hr>";
    echo "<br>";
    $arrayWeek = array('일','월','화','수','목','금','토');
    echo "현재시간 : ".date('Y-m-d')." (".$arrayWeek[date('w')].") ".date('H:i:s');
?>
