<html>
<head>
    <title>Chatroom</title>
    <meta http-equiv="refresh" content="3; url=display.php">
<style>
    body
    {
        background-image:url(images/chat.png);
    }
    #chatfont
    {
      font-family:Microsoft JhengHei;
      font-size:35px;
    }
     .circle-square
      {
             border-radius:50%;
     }
     #time
     {
       font-family:Microsoft JhengHei;
        font-size:25px;
     }
     #chatname
     {
          font-family:Microsoft JhengHei;
      font-size:35px;
     }
</style>
</head>
<body >
    

    <?php

        require_once("connMysql.php");
        
        
        $sql = "Select * from chatroom ORDER BY time;";
        $result = mysqli_query($link ,$sql);
        $rows = mysqli_num_rows($result);
        
        mysqli_data_seek($result,$rows-10);
        if($rows <10)
            $l=$rows;
        else
            $l=10;
        
        for($i=1;$i<=$l;$i++)
        {
            $row = mysqli_fetch_array($result);
            
            if($_SESSION["memId"] == $row["chatID"])
            {
            ?>
            <div align="right">
            <?php
            echo "<td >"?><img class="circle-square" src="/files/<?php echo $row["chatID"];?>.png" width="100px" height="100px" >
           
            <div id="chatfont">
            <?php

            echo $row["content"];
            echo "  ";?></div>
            <div id="time">
            <?php
            if(substr($row["time"],-8,-6)>12)
            {
               echo "下午 ";
               echo substr($row["time"],-8,-6)-12;
               echo ":";
               echo substr($row["time"],-5,-3);
            }
            else
            {
               echo "上午 ";
               echo substr($row["time"],-8,-6);
               echo ":";
               echo substr($row["time"],-5,-3);
            }
            ?></div>
            <?php
            echo "<br>";
            }
            else{
            ?>
            <div align="left">
            <table>
                <?php
            echo "<tr><td>"?><img class="circle-square"  src="/files/<?php echo $row["chatID"];?>.png" width="100px" height="100px" ></td>
            <?php
                $aaa=$row["chatID"];
                $sql87= "Select * "."from member "."where mId=$aaa";
                $result87 = mysqli_query($link ,$sql87);

                echo "<td id='chatname'>" .$row["name"] . "</td></tr>";
            ?>

            </table>
             <div id="chatfont">
            <?php
            echo $row["content"];
            echo "  ";
            ?></div>
            <div id="time">
            <?php
              if(substr($row["time"],-8,-6)>12)
                {
                   echo "下午 ";
                   echo substr($row["time"],-8,-6)-12;
                   echo ":";
                   echo substr($row["time"],-5,-3);
                }
                else
                {
                   echo "上午 ";
                   echo substr($row["time"],-8,-6);
                   echo ":";
                   echo substr($row["time"],-5,-3);
                }
            ?></div>
            </div>
            <?php
            echo "<br>";
                
            }
        }
        mysqli_data_seek($result,$rows-20);
        $row=mysqli_fetch_array($result);
        $last=$row["time"];
        $sql="Delet From chatroom Where time<'$last';";
        $result = mysqli_query($link,$sql);
        
    ?>
     </div>
</body>
</html>