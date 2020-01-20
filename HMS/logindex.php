<?php
session_start();

if(isset($_SESSION['username'])){
  $_SESSION['msg'] ="You must log in first to view this page";
  header("location : login.php");
}

if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header("location :login.php");
}
?>

<title>welcome-NSBM-HMS</title>
<link rel="stylesheet" type="text/css"  href="log.css">
</head>

<body>
<div class="container">

    <div id="header">
      <div class="logo">
          <img src="logo.jpg"
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
<?php if(isset($_SESSION['username']))  : ?>

  //If the user logs in print information about  him
  <h3>Welcome<strong><?php echo $_SESSION ['username'];?></strong></h3>;

<div class="update">
The below Forum can be used to send receipt to warden so you can update the rental subcription easily<br>
In traditional way you have to give the receipt to the warden to  update student accomodation card.<br>
The folowing method is more effective:<br>
<form>
<label>Renewal of payment</label>
<h3>Insert a photo/digital-foot print given from NSBM</h3>
<img src=" "  width=" "  height=" "  alt=" ">
<label>Name</label>
<input type="text" name="studentName" val="">
<label>Student-id</label>
<input type="text" name="id" value="">
</form>
</div>
<div class="notifications">
  Notifications.
  use grid concept  talk about holidays special cusine edge openning
</div>

</div>

/

<button><a href="logindex.php?logout='1'"></a></button>
}
<?php endif ?>

</body>
</html>
