<?php 
  include('dbconn.php') 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div>
    <h1>
      <a href="/forum">PHP and MYYSQl forum
      </a>
    </h1>

  </div>
  <div>
    <form action="addnewuser.php" method="POST">
      <p><label>Username</label></p>
      <input type="text" id ="username"  name="user_name" >
     <p><label>Password</label></p>
      <input type="password" id="password" name="pass_word">
  
 
    <p><input type="submit" value="Register"></p>


    </form>

  </div>
</body>
</html>