<?php include('server.php') ?>
<html>
<head>
<title>login-NSBM-HMS</title>
<link rel="stylesheet" type="text/css"  href="log.css">
</head>

<body>
<div class = "container">

    <div id="header">
      <div class="logo">
          <img src="logo.jpg">
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

 <div class="login-bx">
  <img src="avatar.jpg" height="100px" width="100px" alt="loginprofile" class="avatar" >
<h2 style="font-size:40px;">Sign in</h2>

<form action="server.php" method="post">

<div><label><b>User Name</b></label></div>
<div> <input type="text" name="username" required ></div>
<br>

<div><label><b>Password</b></label></div>
<div><input type="text" name="password" required ></div>

  <br> <button type="submit"  name="login_user" > log in </button>

<p>A New User!<br> Click Here to  <a href="registration.php"> Register </a> </p>


<br><a href="" onmouseover="alert('Report to programme office')">Help!</a><br>
<br>

  </form>
</div>
</div>


  </body>
</html>
