<?php
session_start();

if (!isset($_SESSION['User'])) {

    header("location:login.php");
}


require_once("AdbConnect.php");

if (isset($_POST['act']) && $_POST["act"] == "delete") {
    $delete_id = $_POST["recordId"];
    mysqli_query($db_connect, "DELETE FROM sbi WHERE id='$delete_id'");
};

if (isset($_POST['act']) && $_POST["act"] == "approve") {
    $update_id = $_POST["recordId"];
    mysqli_query($db_connect, "UPDATE sbi SET isAproved = 1 WHERE id='$update_id'");
};

$query = " select * from sbi ";
$result = mysqli_query($db_connect, $query);


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../JavaScript/site.js"></script>
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
                        <a href="sFeedback.php">View Feedback</a>
                    </li>

                    <li style="float: right;">
                        <?php echo '<a href="logout.php?logout">Logout</a>'; ?>
                    </li>




                </ul>
            </nav>
        </div>
    </div>

    <form id="deleteForm" method="POST">
        <input type="hidden" name="recordId">
        <input type="hidden" name="act" value="delete">
    </form>

    <form id="approveForm" method="POST">
        <input type="hidden" name="recordId">
        <input type="hidden" name="act" value="approve">
    </form>

    <table class="recipe_table">
        <tr>
            <th> ID </th>
            <th> Recipe Name </th>
            <th> Products </th>
            <th> How To Make </th>
            <th> Time To Make </th>
            <th> Uploaded By </th>
            <th> Approve </th>
            <th> Edit </th>
            <th> Delete </th>
        </tr>

        <?php

        while ($row = mysqli_fetch_assoc($result)) {
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
                <td>
                <?php 
                    if($row['isAproved'] == 0)
                    {
                        ?>
                        <a href="#" onclick="return approveRecord(<?php echo $RecipeID ?>)">Approve
                        <?php
                    }else{
                        echo "Aproved";
                    }
                ?>
                </td>
                <td><a href="edit.php?GetID=<?php echo $RecipeID ?>">Edit</a></td>
                <td><a href="#" onclick="return deleteRecord(<?php echo $RecipeID ?>)">Delete</a></td>
            </tr>
        <?php
        }
        ?>


    </table>


</body>

</html>