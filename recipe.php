<?php

include("dbConnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
    <form action="process.php" method="post" name="user">
        Name: <input type="text" name="name" value=""><br>
        Email  <input type="email" name="email" value =""><br>
        Message <textarea name="message"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>