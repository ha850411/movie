<?php

    function authenticateUser($UserID,$password)
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'chat';
        $bd=mysqli_connect($servername,$username,$password,$database);
        if(!$bd)
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "Select * From Users Where UserID='$UserID' and password='$password'";
        $rows = mysqli_query($bd,$sql);
        
        if($row = mysqli_num_rows($rows))
            return 1 ;
        else
            return 0 ;
        
    }
?>