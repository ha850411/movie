<hmtl>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="myCss.css" rel="stylesheet" type="text/css">
    
    <style>
      body
      {

          background:black;
      }
    
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
              color:yellow;
              padding-left:20px;

         }
         
         #text_sty
         {
              padding-left:30px;
              font-size:30px;
               font-family:Microsoft JhengHei;
                color:white;
         }
           #mv_text
         {
              padding-left:30px;  
              font-size:30px;
               font-family:Microsoft JhengHei;
                color:white;
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

              require_once("connMysql.php");
                  //取得所有貨物資料
                  $sql = "SELECT * FROM movie";
                  $result = mysqli_query($link, $sql);

                  //取得貨物的筆數
                  $total_product = mysqli_num_rows($result);
         
                  //顯示貨物資料
                  while ($row = mysqli_fetch_assoc($result))
                  {
                   
                        echo "<table>";
                        $name = $row["name"];
                        $time = $row["time"];
                        $mv_text = $row["mv_text"];
                        $img = $row["img"];
                        echo "<tr>";
                        echo "<td  width='20%' rowspan='3'>"?><img src="/mv_img/<?php echo $img;?>" width="300px" ><?php 
                        echo "</td>"; 
                        
                 
                        echo "<td  width='75%' height='20%'>";?>
                        <div id="id_text">
                        <?php
                            echo $name;
                        ?>
                        </div>
                        <?php
                        echo "</td>";
                        echo "</tr>"; 
                        
                        echo "<tr>";
                            echo "<td  width='75%' height='20%'>";?>
                            <div id="text_sty">
                            <?php
                            echo "上映時間:" . $time;
                            ?>
                            </div>                            
                            <?php
                            echo "</td>";
                        echo "</tr>";
                        
                         echo "<tr>";
                            echo "<td  width='75%'   height='60%'>";?>
                            <div id="mv_text">
                            <?php
                            echo $mv_text;
                            ?>
                            </div>                            
                            <?php
                            echo "</td>";
                        echo "</tr>";
                        
                        echo "<tr width='100%'>";
                        echo "<td colspan='2'>";
                           echo "<hr>";
                        echo "</td>";
                        echo "</tr>";
                        
                        echo "</table>";
                    

                  }

                  //釋放資源並關閉資料連接
                  mysqli_free_result($result);
                  mysqli_close($link);
                
        
        
        
        ?>
    

    
    
</body>


<html>