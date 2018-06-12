<!DOCTYPE html>
<html >

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
    <title>加入DoTogether</title>

        <style>
          
             
            body{
                background: url(background.png);         
                background-size:100%;
            }
     
        </style>
        
</head>

<h1>
<?php

  require_once("connMysql.php");

  //連結資料表member,取得會員的個人資料
  if(isset($_POST["memId"]) && isset($_POST["passwd"]))
  {
	  
	  $query_Login = "SELECT * "
	               . "FROM member "
				   . "WHERE mId = '" . $_POST["memId"] . "'";

	  $result = mysqli_query($link, $query_Login);
	  //利用記錄筆數來確認是否有這個會員
	  $recNo = mysqli_num_rows($result);

	  if($recNo == 0)
	  {   //沒有此會員存在或是輸入會員帳號錯誤
		  echo "會員帳號輸入錯誤,或是尚未申請會員<br>";
		  echo "<a href='login.php'>回會員登入畫面</a>";
	  }
	  else
	  //有此會員帳號,則檢查密碼是否正確,先以身分證字號前4碼為密碼
      {
		  //取得會員的密碼
		  $row = mysqli_fetch_assoc($result);
		  $password = $row["pId"];

		  if($_POST["passwd"] == $password)
		  {  //帳號及密碼皆正確,則進入會員管理畫面
	         //將帳號記在session中,提供給以下網頁
			 $_SESSION["memId"] = $_POST["memId"];
			 $_SESSION["open_mId"] = $_POST["memId"];
			 ?>
<script>

setTimeout(function()
{ 
     window.location = "home.html"; 
}, 0);

</script>	  
		<?php  
                }
		  else
	      {   //密碼錯誤,重新登入
		     echo "密碼輸入錯誤,請重新登入<br>";
		     echo "<a href='login.php'>回會員登入畫面</a>";
	      }		  
	  }
  }
  else
  //帳號或密碼尚未輸入
  {
	 echo "會員帳號或密碼沒有輸入<br>";
	 echo "<a href='login.php'>回會員登入畫面</a>"; 
  }
?>
    </h1>
</html>