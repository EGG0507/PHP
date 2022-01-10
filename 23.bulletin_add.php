<?php
//避免程式登入就修改
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";//echo列印後面文字
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//設定延遲3秒進入後面網站連結
    }
    else{
        $conn=mysqli_connect("localhost","root","", "mydb");
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
           //判斷是否修改成功
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";//echo列印後面文字
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";//echo列印後面文字
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";//設定延遲3秒進入後面網站連結
        }
    }
?>
