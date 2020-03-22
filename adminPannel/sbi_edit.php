<?php 

    require_once("AdbConnect.php");
    $query = " select * from sbi ";
    $result = mysqli_query($db_connect,$query);

?>
<?php
session_start();

if(!isset($_SESSION['User']))
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

                        <table>
                            <tr>
                                <td> Recipe ID </td>
                                <td> Recipe Name </td>
                                <td> Products </td>
                                <td> How To Make </td>
                                <td> Time To Make </td>
                                <td> Uploaded By </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $RecipeID = $row['id'];
                                        $RecipeName = $row['Name'];
                                        $Products = $row['Ingradients'];
                                        $htm = $row['HowToMake'];
                                        $ttm = $row['TimeToMake'];
                                        $ub = $row['UploadedBy'];
                            ?>
                                    <tr>
                                        <td><?php echo $RecipeID ?></td>
                                        <td><?php echo $RecipeName ?></td>
                                        <td><?php echo $Products ?></td>
                                        <td><?php echo $htm ?></td>
                                        <td><?php echo $ttm ?></td>
                                        <td><?php echo $ub ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $RecipeID ?>">Edit</a></td>
                                        <td><a href="sbi_edit.php?delete=<?php echo $RecipeID ?>" onclick="return confirm('Are you sure') ">Delete</a></td>
                                    </tr>   
                                    <?php
                                    if(isset($_GET['delete']))
                                  {
                                      $delete_id= $_GET['delete'];
                                      mysqli_query($db_connect,"DELETE FROM sbi WHERE id='$delete_id'");
                                  }
								?>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>

    
</body>
</html>