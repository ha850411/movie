<hmtl>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="myCss.css" rel="stylesheet" type="text/css">
    
    <style>
      body
      {
          background:white;
          
      }
    
    
       span {
           display: none;
       }
     
        #tab
        {
            padding: 10px;
            padding-bottom: 5px;
            
        }
        
        #f_size
        {
            font-size:40px;
            font-family:Microsoft JhengHei;
            padding:50px;
        }
        
        #input_00
        {
            width:100%;
            height: 92%;
             background-image: url("images/newbg.png");
            background-size:100%;
            background-repeat: no-repeat;
            position: absolute;
            top:0%;

        }
        #submit_tag
        {
            position: relative;
            left: 40%;
        }
input:focus { 
    background-color: #CCEEFF;
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
        
         <form name="postID" action="open_movie.php" method="post" >
             <div id="f_size">
             <p>電影名稱：</p>
              <input name="mv_name" type="text" width="10"  style="font-size:30px;padding:5px;"><br>
              
             <p> 電影類型：</p>
              <select name="mv_type"  style="font-size:40px">
                    <option value="動作片">動作片</option>
                    <option value="驚悚片">驚悚片</option>
                    <option value="愛情片">愛情片</option>
                    <option value="喜劇片">喜劇片</option>
              </select><br>
              <p> 電影院：</p>
              <select name="mv_place"  style="font-size:30px">
                    <option value="#" selected="true">請選擇</option>
                    <optgroup label="台北市">
                         <option value="台北信義威秀">台北信義威秀</option>
                         <option value="喜滿客京華影城">喜滿客京華影城</option>
                         <option value="國賓微風影城">國賓微風影城</option>
                     </optgroup>
                     <optgroup label="台中市">
                         <option value="台中新光影城">台中新光影城</option>
                         <option value="台中老虎城威秀">台中老虎城威秀</option>
                         <option value="台中大遠百威秀影城">台中大遠百威秀影城</option>
                    </optgroup>
                    <optgroup label="高雄市">
                         <option value="高雄威秀">高雄威秀</option>
                         <option value="in89駁二電影院">in89駁二電影院</option>
                         <option value="高雄環球數位3D影城">高雄環球數位3D影城</option>
                     </optgroup>
              </select><br>
                <p> 電影時間：</p>
                <input name="mv_time" type="datetime-local" width="10"  style="font-size:30px"><br>
                <p> 揪團人數：</p>
                 <select name="mv_people"  style="font-size:30px">
                    <option value="1">1人</option>
                    <option value="2">2人</option>
                    <option value="3">3人</option>
                    <option value="4">4人以上</option>
                 </select><br>
                 <p> 性別：</p>
                <select name="mv_sex"  style="font-size:30px">
                    <option value="男生">男生</option>
                    <option value="女生">女生</option>
                    <option value="不拘">不拘</option>
                 </select><br><br>
                <input type="submit" value="發起影局"  style="font-size:30px" id="submit_tag">
             </div>
        </form>

        
    
    

    
    
    </div>
    
    
</body>


<html>