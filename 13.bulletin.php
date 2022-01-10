<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";//echo列印後面文字
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//設定延遲3秒進入後面網站連結
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>登出</a>][<a href=user_add_form.php>新增使用者</a>][<a href=user.php>管理使用者</a>]<br>";
        //mysqli_connect建立資料庫連結
        $conn=mysqli_connect("localhost","root","", "mydb"); //mysqli_query從資料庫查詢資料
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        //mysqli_fetch_array查詢出來的資料一筆一筆抓出
        while ($row=mysqli_fetch_array($result)){
            //.是字串相加
        //<a href=bulletin_edit_form.php?bid={row["bid"]}>修改</a>
        //超連結到某程式 修改
            echo "<tr><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
            //選取資料庫裡面的資料一筆一筆抓出
            //並用echo列印出來
        }
        echo "</table>";
    
    }

?>
