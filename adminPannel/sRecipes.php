<?php 

    require_once("AdbConnect.php");
    $query = " select * from recipe ";
    $result = mysqli_query($db_connect,$query);

?>
<?php
session_start();

if(isset($_SESSION['User']))
{
    
}
else
{
    header("location:login.php");
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

                        <table >
                            <tr>
                                <td>  ID </td>
                                <td>  Name </td>
                                <td>  Email </td>
                                <td> Recipe Name </td>
                                <td> Ingredients </td>
                                <td> How To Make </td>
                                <td> Delete  </td>
                                
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['id'];
                                        $UserName = $row['name'];
                                        $UserEmail = $row['email'];
                                        $rName = $row['rname'];
                                        $Products = $row['Ingradients'];
                                        $htm = $row['HowToMake'];
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserEmail ?></td>
                                        <td><?php echo $rName ?></td>
                                        <td><?php echo $Products ?></td>
                                        <td><?php echo $htm ?></td>
                                        <td><a href="sRecipes.php?delete=<?php echo $UserID ?>" onclick="return confirm('Are you sure') ">Delete</a></td>
                                    </tr>   
                                    
                                    <?php
                                    if(isset($_GET['delete']))
                                  {
                                      $delete_id= $_GET['delete'];
                                      mysqli_query($db_connect,"DELETE FROM recipe WHERE id='$delete_id'");
                                  }
								?>     
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
         
</body>
</html>