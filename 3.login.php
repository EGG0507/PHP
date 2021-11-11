<?php 
//用來判斷輸入的密碼是否正確
    if (($_POST[id] == "john") && ($_POST[pwd]=="john1234"))
        echo "Welcome";
        //利用echo來列印後面的文字
    else
        echo "fail login";
        //利用echo來列印後面的文字
?>
