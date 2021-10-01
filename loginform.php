<!DOCTYPE html>
<html>
<head>
<script src="validate.js"></script>
      <title>login form</title>
      <link rel ="stylesheet" type ="text/css" href ="style.css">
<body>
<h1>i CINEMA</h1>;
<nav>
<ul>
<li><a href="sami.php">HOME</a></li>
<li><a href="movielist.php">ALL MOVIES</a></li> 
<li><a href="movielist.php">WATCH TRAILER</a></li>
<li><a href="contact us.php">CONTACT US</a></li>
<li><a href="about us.php">ABOUT US</a></li>
<li><a href="loginform.php">Signin</a></li>
     </ul>

</nav>
     <div class="loginbox">
      <img src="loginimage.png"  class="avatar">
        <h2>login here</h2>
      <form id = "formLogin" method = "post" action = "admin.php">
<label>User Name: </label>
<input type = "text" name = "username" id = "username" />
<label>Password: </label>
<input type = "password" name = "password" id = "password">
<input type = "button" value = "Login" id = "submit" onclick = "validate()">
<input type = "reset" value = "Reset">
</form>
         
    </div>
</body>
</head>
</html>
