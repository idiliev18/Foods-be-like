<!-- Don't touch-->
<?php

include("dbConnect.php");
?>

<!Doctype html>
<html>

<head>

    <link rel="stylesheet" href="CSS & Images/index.css ">
</head>

<body>

    <div class="wrap">
        <span class="decor"></span>
        <nav>
          <ul class="primary">
            <li>
              <a href="index.php">Home</a>
            </li>
            
            <li>
              <a href="recipe.php">Import a recipe</a>
            </li>
            
            <li>
              <a href="feedback.php">Give us feedback</a> 
            </li>
            
            <li style="float:right">
              <a href="about.html">About Us</a>
            </li>
            
          </ul>
        </nav>
        </div>

    <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>


        <div class="container">
          <form action="process.php"method="POST">
            <label for="fname">Your Name</label>
            <input type="text" id="Your Name" name="name" placeholder="Your Name">

            <label for="fname">Your E-mail</label>
            <input type="email" id="Your E-mail" name="email" placeholder="Your E-mail">

            <label for="fname">Name of the recipe</label>
            <input type="text" id="Name of the recepe" name="rname" placeholder="Name of the recipe">
        
            <label for="lname">Products</label>
            <input type="text" id="Products" name="Ingradients" placeholder="Products..">
        
            <label for="subject">How to prepare it</label>
            <textarea id="subject" name="HowToMake" placeholder="how to prepare it.." style="height:200px"></textarea>
        
            <input type="submit" value="Submit">
          </form>
        </div>

</body>

</html>