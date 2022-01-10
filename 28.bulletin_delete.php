<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";//echo列印後面文字
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//設定延遲3秒進入後面網站連結
    }
    else{   
        #mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("localhost","root","","mydb");
        $sql="delete from bulletin where bid='{$_GET[bid]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";//echo列印後面文字
        }else{
            echo "佈告刪除成功";//echo列印後面文字
        }
        echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";//設定延遲3秒進入後面網站連結
    }
?>