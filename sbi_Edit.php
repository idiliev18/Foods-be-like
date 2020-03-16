<?php 

    require_once("dbConnect.php");
    $query = " select * from sbi ";
    $result = mysqli_query($db_connect,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Records</title>
</head>
<body >

                        <table >
                            <tr>
                                <td> User ID </td>
                                <td> Recipe Name </td>
                                <td> Products </td>
                                <td> How To Make </td>
                                <td> Time To Make  </td>
                                <td> Uploaded By </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $ID = $row['id'];
                                        $RecipeName = $row['Name'];
                                        $Products = $row['Ingradients'];
                                        $htm = $row['HowToMake'];
                                        $ttm = $row['TimeToMake'];
                                        $uploadedBy = $row['UploadedBy'];
                            ?>
                                    <tr>
                                        <td><?php echo $ID ?></td>
                                        <td><?php echo $RecipeName ?></td>
                                        <td><?php echo $Products ?></td>
                                        <td><?php echo $htm ?></td>
                                        <td><?php echo $ttm ?></td>
                                        <td><?php echo $uploadedBy ?></td>
                                        <td><a href="edit.php?User_ID=<?php echo $ID ?>">Edit</a></td>
                                        <td><a href="sbi_edit.php?delete=<?php echo $ID ?>">Delete</a></td>
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