<?php

include("AdbConnect.php");

if(isset($_POST['btn-login']))
{
    $UName = $_POST['UserName'];
    $Pass = $_POST['Password'];
    //echo"$Pass";
    if(empty($UName) || empty($Pass))
    {
        echo "Fill the blanks!";
    }
    else
    {
        $query = "SELECT * FROM users WHERE username='$UName'";
        $result =  mysqli_query($db_connect, $query);
        //echo "$query";
      if($row=mysqli_fetch_assoc($result))
        {
            $db_password = $row['password'];
           // echo"$db_password";
            if($Pass == $db_password)
            {
                header("location:admin.php");
            }
            else
            {
               echo "Incorrect Password";
            }
        }
        else
        {
           echo "Please check the query";
        }
        
    }

}
        
    

?>