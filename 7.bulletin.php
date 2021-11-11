<?php
    error_reporting(0);
    $conn=mysqli_connect("localhost","root","", "mydb");//建立資料庫連線
    $result=mysqli_query($conn, "select * from bulletin");//從資料庫查詢資料
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";//所有欄位的資料
    while ($row=mysqli_fetch_array($result)){
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
    echo "</table>"
?>
