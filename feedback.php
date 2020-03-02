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
                    <a href="recipe.php">Import a recipe</a>
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
        <form action="feedbackpro.php" method="POST" >
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="fname" placeholder="Your name..">
      
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" placeholder="Your last name..">
      
          <label for="fname">Your E-mail</label>
          <input type="email" id="E-mail" name="email" placeholder="Your E-mail..">

          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="0">Bulgaria</option>
            <option value="1 ">The UK</option>
            <option value="2">The USA</option>
            <option value="3">Germany</option>
            <option value="4">Turkey</option>
            <option value="5">Serbia</option>
            <option value="6">Greece</option>
            <option value="7">France</option>
            <option value="8">Romania</option>
            <option value="9">The Netherlands</option>
            <option value="10">Croatia</option>
            <option value="11">Egypt</option>
            <option value="12">China</option>
            <option value="13">Japan</option>
            <option value="14">Australia</option>
            <option value="15">Austria</option>
            <option value="16">Russia</option>
            <option value="17">India</option>
            <option value="18">Brazil</option>
            <option value="19">South Corea</option>
            <option value="20">Canada</option>

          </select>
      
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      
          <input type="submit" value="Submit">
        </form>
      </div>


</body>

</html>