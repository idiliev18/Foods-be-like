<?php 

    require_once("AdbConnect.php");
    $query = " select * from recipe ";
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
    header("location:login.html");
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