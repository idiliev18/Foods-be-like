<?php
session_start();

if(isset($_SESSION['User']))
{
    echo '<a href="logout.php?logout">Logout</a>';
}
else
{
    header("location:login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <link href="CSS and Images/index.css" rel="stylesheet">

 
</head>
<body>
    
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