<?php
session_start();

if(isset($_SESSION['User']))
{
    echo "Hello ". $_SESSION['User']. '</br>';
    echo '<a href="logout.php?logout">Logout</a>';
}
else
{
    header("location:login.html");
}

?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
        <a href="sbi_Upload.php">Upload new recipe</a>
        <a href="sbi_edit.php">View recipes</a>
        <a href="sRecipes.php">View sended recipes</a>    
        <a href="sFeedback.php">View feedback</a>                    


</body>
</html>