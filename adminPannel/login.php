<?php
include ("processLogin.php");
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>

</head>
<body>


    <h1>Login</h1>
        <form action="processLogin.php" method="POST">
            Username<input type="text" name="UserName"></br>
            Password <input type="password" name="Password"></br>
            <input type="submit" value="Login" name="btn-login"></br>
        </form>
       <?php
       if(isset($_GET['error']) == "blanks")
       {
            echo   '<p>Fill the blanks</p> ';
       }
       elseif (isset($_GET['error2']) == "blanks") {
           echo   '<p>Incorrect username or password  </p>';
       }
            

       ?>
      
</body>
</html>