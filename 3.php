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
             position:relative;
             left:30px;
         }
         table,tr,td
         {
            border: 0px solid white;
            font-size:40px;
            font-family:Microsoft JhengHei;
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
         #unfind
         {
             font-size:50px;
              font-family:Microsoft JhengHei;
             text-align: center;
         }
         #title01
         {
               font-size:50px;
              font-family:Microsoft JhengHei;
          
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
                  $sql = "SELECT * FROM talk"." WHERE talk_to='" . $_SESSION["memId"] . "'";
                  $result = mysqli_query($link, $sql);
                  $recNo = mysqli_num_rows($result);
                   echo "<table>";


                if($recNo==0)
                {
                    ?>
                    <div id='unfind'>
                    <?php
                        echo "尚未加入任何影局";
                    ?>
                    </div>
                <?php
                }
                else
                {
                    
                  //顯示貨物資料
                  while ($row = mysqli_fetch_assoc($result))
                  {
                    
                        $talk_from = $row["talk_from"];
                        $talk_to = $row["talk_to"];
                        $chatID=$_SESSION["chatID"];
                
          
           
                              require_once("connMysql.php");
                              //取得所有貨物資料
                              $sql2 = "SELECT * FROM addmovie"." WHERE chatID='" . $chatID . "'";
                              $result2 = mysqli_query($link, $sql2);
                             
                              $_SESSION["who_open"]=$talk_from;
                              
                              while ($row = mysqli_fetch_assoc($result2))
                              {
                               
                                
                                  $mv_name = $row["mv_name"];
								  $mv_place = $row["mv_place"];
								  $mv_time = $row["mv_time"];
								  ?>
					<?php
						for($i=1;$i<$recNo;$i++)
						{
						?>
						<table background="images/chat.png" width="92%" style="border-radius:25px;padding:20px;position:absolute;left:4%;">
								<tr >
								    <?php
                                echo "<td width='15%'>"?><a href="main.html"><img class="circle-square" src="/files/<?php echo $talk_from;?>.png" width="100px" height="100px" >
                                </a>
                                <?php
                                       $sql00 = "SELECT * FROM member"." WHERE mId='" . $_SESSION["who_open"] . "'";
                                       $result00 = mysqli_query($link, $sql00);     
                                       while($row = mysqli_fetch_assoc($result00))
                                       {
                                           ?>
                                           <div>
                                            <td id="open_name">
                                            <?php
                                             echo "發起人 :　" .$row["name"];
                                              ?> 
                                           </td>
                                          </div>
                                        <?php
                                       }
                           ?>
                            </tr>

                        <?php    
                            
                        echo "<tr>";
                            echo "<td>";
                                echo "<hr width='100%' color='black'>";
                            echo "</td>";
                            echo "<td>";
                                echo "<hr width='100%'  color='black'>";
                            echo "</td>";
                        echo "</tr>";
        		
                        echo "<tr >";  
                        echo "<td width='30%'>電影名稱：</td>";
                        echo "<td >" . $mv_name . "</td>";   
                        echo "</tr>";
                        
      					echo "<tr >";     
                        echo "<td>電影地點：</td>";
                        echo "<td >" . $mv_place . "</td>";           
                        echo "</tr>";
    					
    					echo "<tr >";     
                        echo "<td>電影時間：</td>";
                        echo "<td >" . $mv_time. "</td>";           
                        echo "</tr>";
				
				        echo "<tr >";     
                        echo "<td>參加者：</td>";
                        echo "<td >"."?". "</td>";           
                        echo "</tr>";
				
				
                  echo "</table>" ;
                  
						}
                              
                          
              
                    }
                  }         
                }

mysqli_free_result($result);
mysqli_close($link);
                                        
 ?>
                     
               

                 
    
</body>


<html>
