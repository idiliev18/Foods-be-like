<?php
session_start();

if(!isset($_SESSION['User']))
{
    header("location:login.php");
}

?>


<!DOCTYPE html>
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
                   <a href="logout.php?logout">Logout</a> 
                </li>
                
                   
                

            </ul>
        </nav>
    </div>
</div>
<div class="hello"><center>
<?php echo "Hello ". $_SESSION['User']."!". '</br>';?>
</div></center>
</br><center><h1>Statistics are coming soon!</h1></center>
</body>
</html>





























<!--
<body>

<div class="warp">
        <span class="decor"></span>
        <nav>
            <ul class="primary">
                <li>
                    <a href="#" data-lang="nav-home" ></a>
                </li>

                <li>
                    <a href="#" data-lang="nav-recipe" ></a>
                </li>

                <li>
                    <a href="#" data-lang="nav-feedback" ></a>
                </li>

                <li style="float: right;">
                    <a href="#" data-lang="nav-mission" ></a>
                </li>

              <a href="adminPannel/login.php">Admin</a>
                
                   
                

            </ul>
        </nav>
    </div>


<ul>
       <li><a href="sbi_Upload.php">Upload new recipe</a></li>
       <li><a href="sbi_edit.php">View recipes</a></li>
       <li><a href="sRecipes.php">View sended recipes</a></li>
       <li><a href="sFeedback.php">View feedback</a></li>  
       <li><a href="logout.php?logout">Logout</a> </li>   
</ul>

</body>
-->
