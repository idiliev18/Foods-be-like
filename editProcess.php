<?php 

    require_once("dbConnect.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserAge = $_POST['age'];

        $query = " update records set User_Name = '".$UserName."', User_Email='".$UserEmail."',User_Age='".$UserAge."' where User_ID='".$UserID."'";
        $result = mysqli_query($db_connect,$query);

        if($result)
        {
            header("location:sbi_edit.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:sbi_edit.php");
    }


?>