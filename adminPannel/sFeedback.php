<?php
session_start();

if (!isset($_SESSION['User'])) {

    header("location:login.php");
}


require_once("AdbConnect.php");

if (isset($_POST['act']) && $_POST["act"] == "delete") {
    $delete_id = $_POST["recordId"];
    mysqli_query($db_connect, "DELETE FROM feedback WHERE id='$delete_id'");
};

$query = " select * from feedback ";
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
    <table class="feedback-table">
        <tr>
            <th> ID </th>
            <th> Name </th>
            <th> Last Name </th>
            <th> Email </th>
            <th> Country </th>
            <th> Message </th>
            <th> Delete </th>


        </tr>

        <?php

        while ($row = mysqli_fetch_assoc($result)) {
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
                <td><a href="sFeedback.php?delete=<?php echo $UserID ?>" onclick="return deleteRecord(<?php echo $UserID ?>)">Delete</a></td>
            </tr>


        <?php
        }
        ?>


    </table>

</body>

</html>