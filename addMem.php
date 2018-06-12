<!doctype html>
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
        move_uploaded_file($_FILES['photo']['tmp_name'], $targetFolder .iconv('utf-8','big5', $_POST['mId'].'.'.'png'));

        //將目標資料夾與檔案名稱組再一起，就是在server上的檔案位置了。
        $photo = $targetFolder.$_FILES['photo']['name'];
        //echo "檔案存在，可以搬移";
      }
      else
      {?><h1>
        <?php    
        echo "請上傳大頭貼!!!!";
        ?>
        </h1><?php
      }
    }
?>
<html>
<head>
  <meta charset='utf-8'>
    <style>
        body
        {
                 background-size:100%;
                background-image: url("addbg.png");
                background-repeat: no-repeat;
        }
    </style>
    
</head>

<body >

<?php
  require_once("connMysql.php");
  //連結資料表member,取得會員的個人資料
   
  if(isset($_POST["mId"]))
  {
	  $query_Login = "SELECT * "
	               . "FROM member "
				   . "WHERE mId = '" . $_POST["mId"] . "'";
	  $result = mysqli_query($link, $query_Login);
	  //利用記錄筆數來確認是否有這個會員
	  $recNo = mysqli_num_rows($result);
	  if($recNo != 0)
	  { ?><h1>
        <?php    
        //此會員帳號已經存在,請申請者重新設定帳號
		 echo "會員帳號已經存在,請再重設帳號";
         echo "<br>";
         echo "<a href='add.html'>回會員登入畫面</a>";
           ?>
        </h1><?php
	  }
	  else
	  //新帳號可以被設定
      {
        if(isset($_POST["mId"])==TRUE)
        {
         require_once("connMysql.php");
    
          $name = $_POST["name"];
          $mId= $_POST["mId"];
          $pId = $_POST["pId"];
          $sex = $_POST["gender"];
          $address = $_POST['address'];
          $phone = $_POST["phone"];
          $birth = $_POST["birth"];
          $_SESSION["memId"] = $_POST["mId"];
          $sql = "INSERT INTO member(name, mId, pId,sex,phone,address,birth) "."VALUES ('" . $name . "','" . $mId . "', '". $pId . "','" . $sex ."','" . $phone . "','" . $address . "','" . $birth . "')";
           mysqli_query($link, $sql); ?>

<script>

setTimeout(function()
{ 
     window.location = "home.html"; 
}, 0);

</script>
<?php
        }
         
	  }
  }
 
?>



</html>