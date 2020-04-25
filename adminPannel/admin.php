<?php
session_start();
include ("AdbConnect.php");
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

<div class="stats-rfa">
<div class="digit-rfa">
<?php
$sql="SELECT count(id) AS total FROM sbi WHERE isAproved = 0";
$result = mysqli_query($db_connect,$sql);
$values = mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>
</div>
<h1>Recipes for Aproving</h1>
</div>

<div class="stats-ffr">
<div class="digit-ffr">
<?php
$sql="SELECT count(id) AS total FROM feedback WHERE isAproved = 0";
$result = mysqli_query($db_connect,$sql);
$values = mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>
</div>
<h1>Feedback for reading</h1>
</div>

<div class="stats-ar">
<div class="digit-ar">
<?php
$sql="SELECT count(id) AS total FROM sbi";
$result = mysqli_query($db_connect,$sql);
$values = mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>
</div>
<h1>All recipes</h1>
</div>

<div class="stats-af">
<div class="digit-af">
<?php
$sql="SELECT count(id) AS total FROM feedback ";
$result = mysqli_query($db_connect,$sql);
$values = mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>
</div>
<h1>All feedback</h1>
</div>
</body>
</html>
