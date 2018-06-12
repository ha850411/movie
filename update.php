<?php
  header("Content-Type: text/html; charset=utf-8");
  require_once("connMysql.php");


  $pId = $_POST["pId"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  $birth = $_POST["birth"];
  $sql = "UPDATE member SET "
       . "pId='" . $pId . "', "
	   . "birth='" . $birth . "', "
	   . "phone = '" . $phone . "', "
	   . "address='" . $address . "'"
	   . "WHERE mId='" . $_SESSION["memId"] . "'";
   mysqli_query($link, $sql) or die(mysqli_error( $link));
   header('Location:/4.php', true, 301);
?>