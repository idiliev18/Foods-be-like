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
        Email:  <input type="email" name="email" value =""><br>
        Recipe Name: <input type="text"name="rname">
        Ingradients: <textarea name="Ingradients"></textarea>
        How to make: <textarea name="HowToMake"></textarea>
        <input type="submit" value="Submit">
    </form>
    <a href="index.html">Riba</a>
</body>
</html>