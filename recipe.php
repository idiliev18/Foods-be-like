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
        Name: <input type="text" name="name" value="" required><br>
        Email:  <input type="email" name="email" value ="" required><br>
        Recipe Name: <input type="text"name="rname" required><br>       
        Ingradients: <textarea name="Ingradients" required></textarea><br>
        How to make: <textarea name="HowToMake" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
    <a href="index.html">Riba</a>
</body>
</html>