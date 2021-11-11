<?php
    session_start();
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;//如果counter無值數會直接為1
    else
        $_SESSION["counter"]++;//如果相反則加1

    echo "counter=".$_SESSION["counter"];//顯示結果
    echo "<br><a href=reset_counter.php>重置counter</a>";//列印重製計算的連結
?>
