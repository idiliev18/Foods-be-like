<!-- Don't touch-->
<?php
include("dbConnect.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$rname=$_REQUEST['rname'];
$Ingradients=$_REQUEST['Ingradients'];
$HowToMake=$_REQUEST['HowToMake'];

$query=mysqli_query($db_connect,"INSERT INTO recipe (name, email, rname, Ingradients, HowToMake) VALUES ('$name','$email','$rname', '$Ingradients', '$HowToMake')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
//header("location:recipe.php?note=success");
?>

<script>
	window.location.href = "recipe.html?note=success";
</script>

