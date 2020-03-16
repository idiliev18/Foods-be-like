<?php 

    require_once("dbConnect.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['id'];
        $RecipeName = $_POST['Name'];
        $Products = $_POST['Ingradients'];
        $htm = $_POST['HowToMake'];
        $gosho = $_POST['TimeToMake'];
        $uploadedBy = $_POST['UploadedBy'];

            $query = " update sbi set Name = '".$RecipeName."', Igradients='".$Products."',HowToMake='".$htm."',TimeToMake='".$gosho."',UploadedBy='".$uploadedBy."' where User_ID='".$UserID."'";
        $result = mysqli_query($db_connect,$query);

        if($result)
        {
            header("location:sbi_Edit.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:sbi_Edit.php");
    }


?>