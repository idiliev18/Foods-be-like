<?php
include("AdbConnect.php");

$result = mysqli_query("SELECT * FROM sbi", $db_connect);
$num_rows = mysqli_num_rows($result);

echo "$num_rows Rows\n";
?>
