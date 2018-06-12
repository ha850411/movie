<?php
  //資料庫主機設定
  $db_host ="localhost";
  $db_name = "id3043285_test87";
  $db_username = "id3043285_root";
  $db_password = "000000";
  //設定資料連線
  //讓php與MySQL連接
  $link = mysqli_connect($db_host, $db_username, $db_password) 
	   or die("無法建立連接" . mysqli_connect_error() 
	          . ":" . mysqli_connect_error() . "<br>");
  //設定字元集與連線校對
  mysqli_set_charset($link,"utf8");
  //連接資料庫
  mysqli_select_db($link, $db_name)
      or die ("無法開啟 資料庫: " . mysqli_error($link));
?>