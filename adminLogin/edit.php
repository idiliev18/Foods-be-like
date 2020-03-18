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
 
?>

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

</head>
<body>

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