<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";//echo列印後面文字
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//設定延遲3秒進入後面網站連結
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");  #mysqli_connect() 建立資料庫連結
        $sql="delete from user where id='{$_GET[id]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";//echo列印後面文字
        }else{
            echo "使用者刪除成功";//echo列印後面文字
        }
        echo "<meta http-equiv=REFRESH content='3, url=user.php'>";//設定延遲3秒進入後面網站連結
    }
?>