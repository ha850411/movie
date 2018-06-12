<?php
  header("Content-Type: text/html; charset=utf-8");
  require_once("connMysql.php");

  //連結資料表member,取得會員的個人資料
   
          $mId =  $_SESSION["memId"];
          $mv_name =$_POST["mv_name"];
          $mv_type =$_POST["mv_type"];
          $mv_place =$_POST["mv_place"];
          $mv_time =$_POST["mv_time"];
          $mv_people =$_POST["mv_people"];
          $mv_sex =$_POST["mv_sex"];
          $abc=date("H:i:s");
         $a=substr($abc,-8,-6);
         $b=substr($abc,-5,-3);
         $c=substr($abc,2,0);
         $d=$c*9;
         $chatID="$a"."$b"."$c"."$d";
          
          
          
          $sql = "INSERT INTO addmovie(mId,mv_name,mv_type,mv_time,mv_place,mv_people,mv_sex,chatID) "." VALUES ('". $mId."','".$mv_name."','". $mv_type."','". $mv_time."','". $mv_place."','". $mv_people."','". $mv_sex."' ,'".$chatID."')";
           mysqli_query($link, $sql) or die(mysqli_error( $link));

            
?>

<?php
  header("Content-Type: text/html; charset=utf-8");
  require_once("connMysql.php");

    
         $sql2 = "INSERT INTO talk(talk_to)"."VALUES('" . $mId . "')";
         mysqli_query($link, $sql2) or die(mysqli_error( $link));
 header('Location:/1.php', true, 301);

?>
