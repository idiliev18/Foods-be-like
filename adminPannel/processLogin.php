<?php

session_start();    
include("AdbConnect.php");
$error='';

if(isset($_POST['btn-login']))
{
    $UName = $_POST['UserName'];
    $Pass = $_POST['Password'];
    //echo"$Pass";
    if(empty($UName) || empty($Pass))
    {
      $error="Fill the blanks!";
       
        
    }
    else
    {
        $query = "SELECT * FROM admins WHERE username='$UName'";
        $result =  mysqli_query($db_connect, $query);
        //echo "$query";
      if($row=mysqli_fetch_assoc($result))
        {
            $_SESSION['User'] = $_POST['UserName'];
            $db_password = $row['password'];
            // echo"$db_password";
            if($Pass == $db_password)
            {
                header("location:admin.php");
            }
            else
            {
               echo "Incorrect username or password";

            }
        }
        else
        {
           echo "Incorrect username or password";
        }
        
    }

}
        
    

?>