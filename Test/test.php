<?php
include ("dbcon.php");

$sql="SELECT count(id) AS total FROM recipe";
$result = mysqli_query($db_connect,$sql);
$values = mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;

?>