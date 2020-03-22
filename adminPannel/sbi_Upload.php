<?php
session_start();

if(!isset($_SESSION['User']))
{

    header("location:login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
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
                    <a href="sRecipes.php">View Sended Recipe</a>
                </li>

                <li>
                    <a href="sFeedback.php">View Sended Feedback</a>
                </li>

                <li style="float: right;">
                  <?php echo '<a href="logout.php?logout">Logout</a>';?>
                </li>
                
                   
                

            </ul>
        </nav>
    </div>
</div>
    <div class="container">
<form action="processUpload.php" method="POST">
    <label for="fname">Recipe name</label>
    <input type="text" id="Your Name" name="Name" required>

    <label for="fname">Products</label>
    <input type="text" id="Your E-mail" name="Ingradients" required>

    <label for="fname">How To Make</label>
    <input type="text" id="Name of the recepe" name="HowToMake" required>

    <label for="lname">Time To Make</label>
    <input type="text" id="Products" name="TimeToMake" required>

    <label for="subject">Uploaded By</label>
    <input type="text" id="subject" name="UploadedBy" required>

    <input type="submit" value="Submit">
</form>
    </div>

</body>
</html>