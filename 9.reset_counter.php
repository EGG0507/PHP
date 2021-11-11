<?php
    session_start();
    unset($_SESSION["counter"]);//重置counter
    echo "counter重置成功....";//echo列印出後面文字
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>";//設定延遲2秒進入後面網站連結

?>
