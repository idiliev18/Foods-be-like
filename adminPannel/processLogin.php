<?php

session_start();    
include("../dbConnect.php");
$error='';

if(isset($_POST['btn-login']))
{
    $UName = $_POST['UserName'];
    $Pass = $_POST['Password'];
    //echo"$Pass";
    if(empty($UName) || empty($Pass))
    {
     header("location:login.php?error=blanks");  
       
        
    }
    else
    {
        $query = "SELECT * FROM admins WHERE username='$UName'";
        $result =  mysqli_query($db_connect, $query);
        //echo "$query";
      if($row=mysqli_fetch_assoc($result))
        {
            $_SESSION['User'] = $row['username'];
            $db_password = $row['password'];
            // echo"$db_password";
            if(password_verify($Pass,$db_password) === true)
            {
                header("location:admin.php");
            }
            else
            {
                header("location:login.php?error2=inc");  

            }
        }
        else
        {
            header("location:login.php?error2=inc");  
        }
        
    }

}
        
    

?>