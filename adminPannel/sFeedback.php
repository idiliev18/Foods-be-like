<?php 

    require_once("AdbConnect.php");
    $query = " select * from feedback ";
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

                        <table >
                            <tr>
                                <td>  ID </td>
                                <td>  Name </td>
                                <td>  Last Name </td>
                                <td> Email </td>
                                <td> Country </td>
                                <td> Message </td>
                                <td> Delete  </td>
                          
                                
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['id'];
                                        $UserName = $row['fname'];
                                        $UserLName = $row['lname'];
                                        $Email = $row['email'];
                                        $Country = $row['country'];
                                        $msg = $row['subject'];
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserLName ?></td>
                                        <td><?php echo $Email ?></td>
                                        <td><?php echo $Country ?></td>
                                        <td><?php echo $msg ?></td>
                                        <td><a href="sFeedback.php?delete=<?php echo $UserID ?>" onclick="return confirm('Are you sure') ">Delete</a></td>
                                    </tr>   
                                    
                                    <?php
                                    if(isset($_GET['delete']))
                                  {
                                      $delete_id= $_GET['delete'];
                                      mysqli_query($db_connect,"DELETE FROM feedback WHERE id='$delete_id'");
                                  }
								?>     
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
         
</body>
</html>