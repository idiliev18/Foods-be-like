<?php 
    require_once("dbConnect.php");

    if(isset($_POST['act']) && $_POST['act'] == "Update")
    {
        
        $RecipeID = $_POST['id'];
        $RecipeName = $_POST['rname'];
        $Ingradients = $_POST['ingradients'];
        $htm = $_POST['htm'];
        $ttm = $_POST['ttm'];
        $ub = $_POST['ub'];

        $query = " update sbi set Name = '".$RecipeName."', Ingradients='".$Ingradients."', HowToMake='".$htm."', TimeToMake='".$ttm."', UploadedBy='".$ub."' where id=".$RecipeID."";
        
        $result = mysqli_query($db_connect, $query);

        if($result)
        {
            header("location:sbi_edit.php");
        }
        else
        {
            die(' Please Check Your Query ');
        }
    }
    else
    {
        die("Incorrect action!");
        //header("location:sbi_edit.php");
    }


?>