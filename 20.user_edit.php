<?php
//避免程式登入就修改
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";//echo列印後面文字
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//設定延遲3秒進入後面網站連結
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");     //判斷是否修改成功
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
            echo "修改錯誤";//echo列印後面文字
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";//設定延遲3秒進入後面網站連結
        }else{
            echo "修改成功，三秒鐘後回到網頁";//echo列印後面文字
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";//設定延遲3秒進入後面網站連結
        }
    }

?>