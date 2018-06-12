<?php
$photo = '';
if(isset($_FILES['photo']))
{
  //print_r($_FILES);
  /**
   * //檔案的陣列有以下索引值
   * $_FILES['設定的name鍵值']['name'] 原本的檔名
   * $_FILES['設定的name鍵值']['tmp_name'] 暫存在server上面的檔名，會被重新命名過
   * $_FILES['設定的name鍵值']['type'] 檔案型態
   * $_FILES['設定的name鍵值']['size'] 檔案大小
   * $_FILES['設定的name鍵值']['error'] 錯問代碼
   */
  //如果有傳 photo 索引值的檔案來
  //檢查上傳到server的暫存檔案是否存在
  if(file_exists($_FILES['photo']['tmp_name']))
  {
    // move_uploaded_file 這個方法可以將上傳的檔案，移動到你目標的資料夾。
    $targetFolder = "files/";
    move_uploaded_file($_FILES['photo']['tmp_name'], $targetFolder .iconv('utf-8','big5', $_FILES["photo"]["name"]));

    //將目標資料夾與檔案名稱組再一起，就是在server上的檔案位置了。
    $photo = $targetFolder.$_FILES['photo']['name'];
    //echo "檔案存在，可以搬移";
  }
  else
  {
    echo "上傳檔案失敗，暫存檔不在，請確認資料夾寫入權限。或php.ini上傳檔案容量限制是否太小。";
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>確認會員資料</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
    <title>加入DoTogether</title>

        <style>
            .textbox{
                background-color:floralwhite;
                border-radius:28px;
                border:3px solid #000000;
                display:inline-block;
                cursor:pointer;
                color:#000000;
                font-family:Arial;
                font-size:17px;
                font-color:#000000;
                padding:16px 31px;
                text-decoration:none;
                text-shadow:0px 1px 0px #2f6627;
                align-self: center;
                
            }    
         
        .myButton
         {
                -moz-box-shadow: 4px 2px 11px -1px #000000;
                -webkit-box-shadow: 4px 2px 11px -1px #000000;
                box-shadow: 4px 2px 11px -1px #000000;
                background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffec64), color-stop(1, #ffab23));
                background:-moz-linear-gradient(top, #ffec64 5%, #ffab23 100%);
                background:-webkit-linear-gradient(top, #ffec64 5%, #ffab23 100%);
                background:-o-linear-gradient(top, #ffec64 5%, #ffab23 100%);
                background:-ms-linear-gradient(top, #ffec64 5%, #ffab23 100%);
                background:linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffec64', endColorstr='#ffab23',GradientType=0);
                background-color:#ffec64;
                -moz-border-radius:5px;
                -webkit-border-radius:5px;
                border-radius:5px;
                border:1px solid #ffaa22;
                display:inline-block;
                cursor:pointer;
                color:#333333;
                font-family:Arial;
                font-size:8px;
                font-weight:bold;
                padding:12px 44px;
                text-decoration:none;
        }
            form{
                margin-top: 60px;
            }
            h2{
                margin-top: 0px;
                
            }
            body{
                background: url(background.jpg);         
                background-size:100%;
                background-repeat:no-repeat;
            }
            h3{
                font-family:Microsoft JhengHei;
                       font-weight:900;
            }
            h4
            {
                     font-weight:500;
                    font-family:Microsoft JhengHei;
            }
        </style>
  </head>
     <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>  
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><font color="yellow">DoTogether</font></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">首頁</a></li>
                    <li><a href="add.html">加入會員</a></li>
                    <li><a href="#contact">關於我們</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>


  <body> 
           
      
      <font >
    <h3>您的註冊資訊</h3>
    
    <h3>登入資訊</h3>
      <h4>　帳號：<?php echo $_POST["mId"];?></h4>
      <h4>　密碼： <?php echo $_POST['pId'];?></h4>

    <h3>個人資訊
      　<h4>　姓名：<?php echo $_POST['name'];?></h4>
        <h4>　性別：<?php echo $_POST['gender'];?></h4>
        <h4>　電話：<?php echo $_POST['phone'];?></h4>
        <h4>　住址：<?php echo $_POST['address'];?></h4>
        <h4>　生日：<?php echo $_POST['birth'];?></h4>
        <h4>　照片：</h4><?php
          if($photo != ''){
            echo "<img src='{$photo}'>";
          }
         ?><br>
      </font>

            <form name="appendForm" method="post" action="addMem.php" enctype="multipart/form-data">
                    <input type ="hidden" nam="mId" value="<?php $_POST['mId'] ?>">  
                    <input type ="hidden" nam="pId" value="<?php $_POST['pId'] ?>">    
                    <input type ="hidden" nam="name" value="<?php $_POST['name'] ?>">  
                    <input type ="hidden" nam="gender" value="<?php $_POST['gender'] ?>">  
                    <input type ="hidden" nam="phone" value="<?php $_POST['phone'] ?>">  
                    <input type ="hidden" nam="address" value="<?php $_POST['address'] ?>">  
                    <input type ="hidden" nam="birth" value="<?php $_POST['birth'] ?>">  
                    <input type="submit" value="確認送出">
            </form>
  </body>
</html>
