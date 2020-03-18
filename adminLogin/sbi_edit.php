<?php 

    require_once("AdbConnect.php");
    $query = " select * from sbi ";
    $result = mysqli_query($db_connect,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <title>View Records</title>
</head>
<body>

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
                                        <td><a href="sbi_edit.php?delete=<?php echo $RecipeID ?>">Delete</a></td>
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