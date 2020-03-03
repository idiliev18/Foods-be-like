<!-- Don't touch-->
<?php

include("dbConnect.php");
?>

<!Doctype html>
<html>

<head>

    <link rel="stylesheet" href="CSS and Images/index.css ">
    <link rel="icon" href="CSS and Images/Images/icon.png">
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
              <a href="recipe.php">Send a recipe</a>
            </li>
            
            <li>
              <a href="feedback.php">Give us feedback</a> 
            </li>
            
            <li style="float:right">
              <a href="about.html">Mission</a>
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
            <input type="text" id="Your Name" name="name" placeholder="Your Name" required>

            <label for="fname">Your E-mail</label>
            <input type="email" id="Your E-mail" name="email" placeholder="Your E-mail" required>

            <label for="fname">Name of the recipe</label>
            <input type="text" id="Name of the recepe" name="rname" placeholder="Name of the recipe" required>
        
            <label for="lname">Products</label>
            <input type="text" id="Products" name="Ingradients" placeholder="Products.." required>
        
            <label for="subject">How to prepare it</label>
            <textarea id="subject" name="HowToMake" placeholder="How to prepare it.." style="height:200px" required></textarea>
        
            <input type="submit" value="Submit">
          </form>
        </div>

</body>

</html>