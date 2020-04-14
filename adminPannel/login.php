<?php
include ("processLogin.php");
?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="CSS JS Images/adminStyle.css">
<style>
      a{
            color: black;
      }
</style>
</head>
<body>


<div class="login">
<h1 align="center">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="UserName"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="Password"><br/><br/>
<input type="submit" value="Login" name="btn-login">

<?php
       
       if(isset($_GET['error']) == "blanks")
           {
                 echo   '<center><p class="error">Fill the blanks</p></center> ';
           }
       elseif (isset($_GET['error2']) == "blanks") 
           {
                 echo   '<center><p class="error2">Incorrect username or password</p></center>';
           }

?>
<a href="../index.html">Home</a>

</div>
</body>
</html>