<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {
            echo "請登入帳號";//echo列印後面文字
            echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//設定延遲3秒進入後面網站連結
        }
        else{   
            echo "<h1>使用者管理</h1>
                [<a href=bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("localhost","root","","mydb"); //mysqli_query從資料庫查詢資料
            $result=mysqli_query($conn, "select * from user"); //mysqli_fetch_array查詢出來的資料一筆一筆抓出
            while ($row=mysqli_fetch_array($result)){
                 //.是字串相加
                echo "<tr><td><a href=user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>