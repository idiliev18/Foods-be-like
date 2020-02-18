<?php
/**
 * Created by PhpStorm.
 * User: ZiaulHaque
 * Date: 11-10-2015
 * Time: 18:25
 */
include("dbConnect.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
/*
 * Inserting data to table
 * */

$query=mysqli_query($db_connect,"INSERT INTO recipe (name, email, message) VALUES ('$name','$email','$message')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:index.php?note=success");
