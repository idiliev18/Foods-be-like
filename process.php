<?php
include("dbConnect.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];

$query=mysqli_query($db_connect,"INSERT INTO recipe (name, email, message) VALUES ('$name','$email','$message')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:recipe.php?note=success");
