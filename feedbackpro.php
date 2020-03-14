<?php
include("dbConnect.php");
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$country=$_REQUEST['country'];
$subject=$_REQUEST['subject'];


$query=mysqli_query($db_connect,"INSERT INTO feedback (fname, lname,email, country, subject) VALUES ('$fname','$lname', '$email','$country', '$subject')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
//header("location:feedback.php?note=success");
?>
<script>
	window.location.href = "feedback.html?note=success";
</script>