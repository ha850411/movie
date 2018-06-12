<hmtl>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="myCss.css" rel="stylesheet" type="text/css">
    
    <style>
      #text_text
      {
        padding:20px;   
        font-size:40px;
        border-radius:20px;

      }
       .circle-square
        {
             border-radius:50%;
         }
         table,tr,td
         {
            border: 0px solid white;
         }
         #id_text
         {
   
              font-size:60px;
              font-weight: bold;
              font-family:Microsoft JhengHei;
              padding-top:60px;
              padding-left:20px;

         }
         
         #text_sty
         {
             
              padding:40px;   
              font-size:50px;
               font-family:Microsoft JhengHei;
         }
    </style>

</head>

<body>    
 <table align="center" width="60%" border="0">
      <tr height="20"  align="center">
        <td><a href="3.php" style="font-family:Microsoft JhengHei;"><font color="yellow" size="20">發起的影局</font></a></td>
        <td><a href="my_add.php"  style="font-family:Microsoft JhengHei;"><font color="yellow" size="20">加入的影局</font></a></td>
      </tr>
    </table>
    
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
              require_once("connMysql.php");


                  //取得所有貨物資料
                  $sql = "SELECT * FROM talk"." WHERE talk_from='" . $_SESSION["memId"] . "'";
                  $result = mysqli_query($link, $sql);

                  //取得貨物的筆數
                  $total_product = mysqli_num_rows($result);

                  echo "<table>";

                  //顯示貨物資料
                  while ($row = mysqli_fetch_assoc($result))
                  {
                      
                    $talk_from = $row["talk_from"];
                  }
                              require_once("connMysql.php");
                              //取得所有貨物資料
                              $sql2 = "SELECT * FROM addmovie"." WHERE mId='" . $talk_from . "'";
                              $result2 = mysqli_query($link, $sql2);
            
            
                              while ($row = mysqli_fetch_assoc($result2))
                              {
                                  $mv_name = $row["mv_name"];
								  $mv_place = $row["mv_place"];
								  $mv_time = $row["mv_time"];
                              }
                    echo "<table >";
                    echo "<tr >";     
                    echo "<td>電影名稱　</td>";
                    echo "<td >" . $mv_name . "</td>";           
                    echo "</tr>";
					
					
					echo "<tr >";     
                    echo "<td>電影地點　　</td>";
                    echo "<td >" . $mv_place . "</td>";           
                    echo "</tr>";
					
					echo "<tr >";     
                    echo "<td>電影時間　</td>";
                    echo "<td >" . $mv_time. "</td>";           
                    echo "</tr>";
					
                  echo "</table>" ;
  
        
        
        
                  //釋放資源並關閉資料連接
                  mysqli_free_result($result);
                  mysqli_close($link);
                
                  ?>
                    

                 
    
</body>


<html>