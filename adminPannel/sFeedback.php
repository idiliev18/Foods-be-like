<?php 

    require_once("AdbConnect.php");
    $query = " select * from feedback ";
    $result = mysqli_query($db_connect,$query);

?>
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
</head>
<body>

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