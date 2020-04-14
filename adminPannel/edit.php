<?php 
 
    require_once("AdbConnect.php");
    $RecipeID = $_GET['GetID'];
    $query = " select * from sbi where id='".$RecipeID."'";
    $result = mysqli_query($db_connect,$query);
 
    while($row=mysqli_fetch_assoc($result))
    {
        $RecipeID = $row['id'];
        $RecipeName = $row['Name'];
        $ingradients = $row['Ingradients'];
        $htm = $row['HowToMake'];
        $ttm = $row['TimeToMake'];
        $ub = $row['UploadedBy'];
    }
 
?><?php
session_start();

if(!isset($_SESSION['User']))
{

    header("location:login.html");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS JS Images/adminStyle.css">
    <style>
 
 * {
margin: 0;
padding: 0;
box-sizing: border-box;
}

</style>

</head>
<body>
<div class="navlinks">
<div class="warp">
        <span class="decor"></span>
        <nav>
            <ul class="primary">
                <li>
                    <a href="admin.php">Dashboard</a>
                </li>

                <li>
                    <a href="sbi_upload.php">Upload a Recipe</a>
                </li>

                <li>
                    <a href="sbi_edit.php">View Recipes</a>
                </li>

                <li>
                    <a href="sFeedback.php">View Feedback</a>
                </li>

                <li style="float: right;">
                  <?php echo '<a href="logout.php?logout">Logout</a>';?>
                </li>
                
                   
                

            </ul>
        </nav>
    </div>
</div>

            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $RecipeID ?>">
                <input type="text"  name="rname"  value="<?php echo $RecipeName ?>">
                <input type="text" name="ingradients" value="<?php echo $ingradients ?>">
                <input type="text"  name="htm"   value="<?php echo $htm ?>">
                <input type="text"  name="ttm"   value="<?php echo $ttm ?>">
                <input type="text"  name="ub"   value="<?php echo $ub ?>">
                <input type="submit" name="act" value="Update">
            </form>
     
    
</body>
</html>