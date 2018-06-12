<hmtl>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="myCss.css" rel="stylesheet" type="text/css">
    
    <style>
 
        #tab
        {
            padding: 10px;
            padding-bottom: 5px;
            
        }
        
        #f_size
        {
            font-size:30px;
            font-family:Microsoft JhengHei;
        }
        
        #input_00
        {
            width:80%;
            height: 80%;
            padding: 30px;
            position: absolute;
            top:5%;
            left:7%;             
            border-radius: 15px;
        }
        #submit_tag
        {
            position: relative;
            left: 40%;
        }
        .circle-square
        {
             border-radius:50%;
         }
         td
        {
          font-size:30px;
          font-weight:bold;
          font-family:微軟正黑體;
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
    
    
    <div id="input_00">
        
         <?php
          $cc = 1;
              require_once("connMysql.php");


                  //取得所有貨物資料
                  $sql = "SELECT * FROM addmovie";
                  $result = mysqli_query($link, $sql);

                  //取得貨物的筆數
                  $total_product = mysqli_num_rows($result);

                  echo "<table>";

                  //顯示貨物資料
                  while ($row = mysqli_fetch_assoc($result))
                  {
                      
                    $mId = $row["mId"];
                    $mv_name = $row["mv_name"];
                    $mv_type = $row["mv_type"];
                    $mv_place = $row["mv_place"];
                    $mv_time = $row["mv_time"];
                    $mv_people = $row["mv_people"];
                    $mv_sex = $row["mv_sex"];
                    $chatID=$row["chatID"];
                    echo "<form method='post' action='add_to_movie.php?mId=" . $mId .
                                                      "&mv_name=" . $mv_name .
                                                      "&mv_type=" . $mv_type .
                                                      "&mv_place=" . $mv_place .
                                                      "&mv_time=" . $mv_time . 
                                                      "&mv_people=" . $mv_people .
                                                      "&mv_sex=" . $mv_sex ."'>";
                    echo "<tr>";
                    echo "<td >"?><img class="circle-square" src="/files/<?php echo $mId;?>.png" width="100px" height="100px" >
                    <?php 
                    echo "</td>"; 
             
            
                          require_once("connMysql.php");
                              //取得所有貨物資料
                              $sql2 = "SELECT * FROM member"." WHERE mId='" . $mId . "'";
                              $result2 = mysqli_query($link, $sql2);
            
            
                              while ($row = mysqli_fetch_assoc($result2))
                              {
                                  $memName = $row["name"];
                              }
                      ?>
                   <div id="font_size"> 
                   <?php
                    if($cc==1)
                    {
                      echo "<td>　　" . $memName . "</td>";   
                    }
                    else
                    {
                         echo "<td>" . $memName . "</td>";   
                    }
                    ?>
                    
                   </div>
                   <?php
                   $cc=$cc+1;
                    echo "</tr>"; 
                    echo "</table>";

                    echo "<table align='left'>";
                        echo "<tr>";     
                             echo "<hr width='100%' color='black'>";
                        echo "</tr>"; 
                    echo "</table>";

                    echo "<table >";
                    echo "<tr >";     
                    echo "<td>電影名稱　</td>";
                    echo "<td >" . $mv_name . "</td>";           
                    echo "</tr>"; 
 
                    echo "<tr>";  
                    echo "<td >電影類型　</td>";
                    echo "<td >" . $mv_type . "</td>";
                    echo "</tr>";    

                    echo "<tr>";  
                    echo "<td >電影院　</td>";
                    echo "<td >" . $mv_place . "</td>";
                    echo "</tr>";  

                    echo "<tr>";  
                    echo "<td >電影時間　</td>";
                    echo "<td >" . $mv_time . "</td>";
                    echo "</tr>";  
                   
                    echo "<tr>";  
                    echo "<td >揪團人數　</td>";
                    echo "<td >" . $mv_people . "</td>";
                    echo "</tr>"; 

                    echo "<tr>";  
                    echo "<td >性別要求　</td>";
                    echo "<td >" . $mv_sex . "</td>";
                    echo "</tr>"; 
$cc+=1;
               
                 echo "<tr>";
                  echo "<td  height='52px' >"; ?>

                  <input type="hidden" name="mv_name" value="<?php echo $mv_name;?>">
                   <input type="hidden" name="open_mId" value="<?php echo $mId;?>">
                  <input type="hidden" name="chatID" value="<?php echo $chatID;?>"> 
<input type='submit' style="background-image:url(https://nkmu18.000webhostapp.com/images/join.png);width:80%;height:100%;">
                 <?php
                  echo "</td>";
                     echo "</tr>";
                    echo "</form>";
                    
                  }

                  echo "</table>" ;
  
        
        
        
                  //釋放資源並關閉資料連接
                  mysqli_free_result($result);
                  mysqli_close($link);
                
                  ?>

    
    
    </div>
    
    
</body>


<html>