<?php
include("AdbConnect.php");

$Name=$_REQUEST['Name'];
$Ingradients=$_REQUEST['Ingradients'];
$HowToMake=$_REQUEST['HowToMake'];
$TimeToMake=$_REQUEST['TimeToMake'];
$UploadedBy=$_REQUEST['UploadedBy'];

$query=mysqli_query($db_connect,"INSERT INTO sbi (Name, Ingradients, HowToMake, TimeToMake, UploadedBy) VALUES ('$Name','$Ingradients','$HowToMake', '$TimeToMake', '$UploadedBy')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);


?>

<script>
	window.location.href = "sbi_Upload.php?note=success";
</script>