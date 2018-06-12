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
                background: url(background.png) ;         
                background-size:cover;
                background-repeat:no-repeat;
      position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: -999;
   
            }
              .logo
            {
                position:absolute;
                top:20%;
                left:35%;
                
            }
            #idForm
            {
                position:absolute;
                top:45%;    
                left:30%;
                font-size: 10px;    
            }
            #hr
            {
                position:absolute;
                top:63%;    
                left:20%;
            }
            a
            {
                position:absolute;
                right:-5%;
                top:-2%;
                
            }
        </style>
        
</head>

    
<body>
    
    
    <img src="logo.png" class="logo" height="30%">
    
    <form name="postID" action="https://nkmu18.000webhostapp.com/chpw.php" method="post" id="idForm">
      <b>帳號</b><br>
	  <input name="memId" type="text" width="300px" class="pwbt"><br>
	  <b>密碼</b><br>
	  <input name="passwd" type="password" width="300px"  class="pwbt">
	  <br>	<br>
        <center> <input type="submit" value="登入系統"></center>

    </form>
 

    <a href="add.html"><img src="joinpic.png" height="80px"></a>

  
    
    
</body>
    
</html>