<?php
  header("Content-Type: text/html; charset=utf-8");
  require_once("connMysql.php");



  $sql = "UPDATE addmovie SET "
       . "who_add='" . $_SESSION["memId"] . "'"
	   . "WHERE mv_name='" . $_POST["mv_name"] . "'";

   mysqli_query($link, $sql) or die(mysqli_error( $link));
 
?>


<?php
  header("Content-Type: text/html; charset=utf-8");
  require_once("connMysql.php");
  
         $_SESSION["open_mId"]= $_POST["open_mId"];

                  $sql = "SELECT * FROM talk"." WHERE talk_to='" . $_SESSION["memId"] . "' AND chatID='".$_POST["chatID"]."'";
                  $result = mysqli_query($link, $sql);
                  $recNo = mysqli_num_rows($result);

                if($recNo==0)
                {
                       $sql = "INSERT INTO talk(talk_from ,talk_to,chatID) "
               ."VALUES ('" . $_SESSION["open_mId"] . "','" .  $_SESSION["memId"]  ."','".$_POST["chatID"]."')";
                   mysqli_query($link, $sql) or die(mysqli_error( $link));
                }
                else
                {
                         header('Location:/3.php', true, 301);
                }
        
         $sql = "INSERT INTO talk(talk_from ,talk_to,chatID) "
               ."VALUES ('" . $_SESSION["open_mId"] . "','" .  $_SESSION["memId"]  ."','".$_POST["chatID"]."')";
                   mysqli_query($link, $sql) or die(mysqli_error( $link));
    $_SESSION["chatID"]=$_POST["chatID"];
     header('Location:/3.php', true, 301);

        
?>


