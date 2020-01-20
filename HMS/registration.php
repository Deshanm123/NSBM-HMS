<?php include('server.php') ?>
<html>

<html>
<head>
<title>Registration-NSBM-HMS</title>
<link rel="stylesheet" type="text/css"  href="log.css">
</head>

<body>
<div class = "container">

    <div id="header">
      <div class="logo">
          <img src="logo.jpg">
        </div>
      </div>
    </div>
<div class="header">
  <h1 style=>Hostel Management System</h1>
  </div>

<div class="nav">
<ul >
  <li><a href="index.php">Home </a></li>
  <li><a href="accom.php">Student Accomodation</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="contact.php">Contact</a></li>
  </ul>
</div>
  <div class="header"><h2><b>Register</b></h2> </div>


<form action="server.php" method="POST" >
<?php include('errors.php') ?>
<div>
    <label>User Name :</label>
    <input type="text" name="username" required>
</div>

<div>
<label>E-mail : </label>
<input type="text" name="email" required>
</div>

<div>
  <label>Password :</label>
  <input type="text" name="password1" required>
</div>
<div>
  <label>Confirm The Password : </label>
  <input type="text" name="password2" required>
</div>
       <button type="submit" name="user_register"><b>Register Me</b></button>


<p>Already a User ?<a href= "login.php" ><b>Log in </b></a></p>

</form>
</div>

</body>

</html>
