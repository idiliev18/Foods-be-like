<?php
session_start();

if(isset($_SESSION['User']))
{
    echo "Hello ". $_SESSION['User']. '</br>';
    //echo '<a href="logout.php?logout">Logout</a>';
}
else
{
    header("location:login.php");
}

?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<ul>
       <li><a href="sbi_Upload.php">Upload new recipe</a></li>
       <li><a href="sbi_edit.php">View recipes</a></li>
       <li><a href="sRecipes.php">View sended recipes</a></li>
       <li><a href="sFeedback.php">View feedback</a></li>  
       <li><a href="logout.php?logout">Logout</a> </li>   
</ul>

</body>
</html>