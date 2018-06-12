<?php
  header("Content-Type: text/html; charset=utf-8");
  require_once("connMysql.php");

?>
<hmtl>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="myCss.css" rel="stylesheet" type="text/css">
    <style>
     form
    {
      font-size:40px;
      font-weight:bold;
      padding:20%;
    }
    input
    {
        font-size:40px;
      font-weight:bold;
    }
 .circle-square
        {
             border-radius:50%;
         }
#root
{
      position: absolute;
      top:20%;
      right:35%;
font-size:50px;
}
  </style>
</head>

<body>    
    
    <hr id="img_hr">
    
     <div id="img_0">
         <img src="images/down2.jpg" height="150px">
    </div>
    <div id="img_1">
        <a href="1.php"> <img src="images/home.png" width="120px"></a>
    </div>
    <div id="text_1">
        <b>首頁</b>
    </div>    
    <div id="img_2">
        <a href="2.php"> <img src="images/movie.png" width="110px"></a>
    </div>
    <div id="text_2">
        <b>電影資訊</b>
    </div> 
    <div id="img_3">
        <a href="3.php"><img src="images/talk.png" width="140px"></a>
    </div>
    <div id="text_3">
        <b>聊天室</b>
    </div> 
    <div id="img_4">
        <a href="4.php"><img src="images/member.png" width="125px"></a>
    </div>
    <div id="text_4">
        <b>會員資料</b>
    </div> 
    <div id="img_5">
        <a href="5.php"><img src="https://nkmu18.000webhostapp.com/images/add2.png" width="220px"></a>
    </div>

 <?php
  $sql = "SELECT * "
       . "FROM member "
	   . "WHERE mId='" . $_SESSION["memId"] . "'";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_assoc($result);
?>
<form name="editForm" method="post" action="update.php">

<img class="circle-square" src="/files/<?php echo $_SESSION["memId"];?>.png" width="300px" height="300px" >
<div id="root">
    <?php echo $_SESSION["memId"]; ?>
</div>  
  <input name="mId" type="hidden" value="<?php echo $_SESSION["memId"]; ?>">
<br>
  <p>密碼</p>
  <input name="pId" type="text" value='<?php echo $row["pId"]; ?>'>
  <br>
  <p>住址</p>
  <select name="address" style="font-size:40px;">
            <option value="Taipei">台北</option>
            <option value="Kaoshiung">高雄</option>
 </select>    
  <br>
    <p>手機</p>
  <input name="phone" type="text" value='<?php echo $row["phone"]; ?>'>
  <br>
 <p>生日</p>
  <input name="birth" type="date" value='<?php echo $row["birth"]; ?>'>
  <br>
<br>
  <input type="submit" value="確認修改">
</form>
    
    
</body>


<html>