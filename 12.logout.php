<?php
    session_start();
    unset($_SESSION["id"]);//重置ID
    echo "登出成功....";//echo列印後面文字
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>";//設定延遲3秒進入後面網站連結

?>
