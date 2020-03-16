<?php 

    require_once("dbConnect.php");
    $UserID = $_GET['User_ID'];
    $query = " select * from sbi where id='".$UserID."'";
    $result = mysqli_query($db_connect,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $ID = $row['id'];
        $RecipeName = $row['Name'];
        $Products = $row['Ingradients'];
        $htm = $row['HowToMake'];
        $ttm = $row['TimeToMake'];
        $uploadedBy = $row['UploadedBy'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">

                        <form action="editProcess.php" method="POST">
                            <label for="fname">Recipe name</label>
                            <input type="text" id="Your Name" name="Name" required value="<?php echo $RecipeName ?>">

                            <label for="fname">Products</label>
                            <input type="text" id="Your E-mail" name="Ingradients" required value="<?php echo $Products ?>">

                            <label for="fname">How To Make</label>
                            <input type="text" id="Name of the recepe" name="HowToMake" required value="<?php echo $htm ?>">

                            <label for="lname">Time To Make</label>
                            <input type="text" id="Products" name="TimeToMake" required value="<?php echo $ttm ?>">

                            <label for="subject">Uploaded By</label>
                            <input type="text" id="subject" name="UploadedBy" required value="<?php echo $uploadedBy ?>">

                            <input type="submit" value="Update" name="update">
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>