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
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   #echo $sql;
   #判斷資料否有放入
   #資料放入
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤";//echo列印後面文字
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";//echo列印後面文字
     echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";//設定延遲3秒進入後面網站連結
   }
}
?>