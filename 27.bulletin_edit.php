<?php
//避免程式登入就修改
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";//echo列印後面文字
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//設定延遲3秒進入後面網站連結
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "修改錯誤";//echo列印後面文字
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";//設定延遲3秒進入後面網站連結
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表";//echo列印後面文字
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";//設定延遲3秒進入後面網站連結
        }
    }

?>