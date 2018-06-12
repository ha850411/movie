<html>
<head>
<title> 123</title>
<style>
 body
    {
        background-image:url(images/chat.png);
    }
    #submit
    {

     width: 135px;
     height: 60px;
     margin-top:10px;
     padding:0px;
     border:none;
     background:url(images/button2.png)no-repeat; 
     background-size:100%;
    }
    #input
    {
        font-size:30px;
    }
</style>
</head>
<body>
<?php
require_once("connMysql.php");
  if (isset($_POST["words"]))
  {
	  $words = $_POST["words"];
      $UserID = $_SESSION["memId"];
        $sql2 = "SELECT * FROM member"." WHERE mId='" . $_SESSION["memId"] . "'";
                  $result2 = mysqli_query($link, $sql2);
                  while ($row = mysqli_fetch_assoc($result2))
                  {
                        $name = $row["name"];
                  }
      
      
      if ($words)
       {
        $time = Date("Y-m-d H:i:s",mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y')));
        $sql = "insert into chatroom (time,content,name,chatID) values('$time','$words','$name','$UserID')";
        $rows = mysqli_query($link,$sql);	
       }	  
  }
?>

<form action = "speak.php" method="post">
  <div algin="center">
   <input id="input" type = "text" name ="words" size="50">
   <input id="submit" type = "submit" value ="　">
  </div>
</form>
</body>
</html>