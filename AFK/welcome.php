<!DOCTYPE html>
<html>
<head>
<title>welcome-NSBM-HMS</title>
<link rel="stylesheet" type="text/css"  href="welcome.css">
</head>

<body>
  <video autoplay muted loop id="myVideo">
  <source src="Green University.mp4" type="video/mp4">
  </video>
</div>

<div class="container">

    <div id="header">
      <div class="logo" alt=www.nsbm.ac.lk>
        <a href="http://www.nsbm.ac.lk/">
          <img src="logo.png">
        </a>
        </div>
      </div>

<div id="highlight">
  <a href="index.html">
  <h1><u><font color="#fff">Hostel Management System</font></u></h1>
</a>
  </div>
  <!--Navigation Tags & Intro-->
<div class="nav">
<ul ><font color="black">
  <li><a href="index.html"><font color="black">Home</font></a></li>
  <li><a href="accom.html"><font color="black">Student Accomodation</font></a></li>
  <li><a href="login.html"><font color="black">Login</font></a></li>
  <li><a href="contact.html"><font color="black">Contact</font></a></li>
  </ul>
</div>
<br>
<br>
<h4><font size=+2> The below Forum can be used to send receipt to warden so the student can update the rental subcription easily.<br>
In traditional way the student have to make the payment to the cashier and give the receipt to the <br> warden to update student accomodation card.
The folowing method is more effective:</font><br></h4>
<div class="update">
<br>
<br>
<form>
<font color="blue" size=+1>
<label><b><u><font size=+2 color="Green"> Renewal of Payment</font></u><b></label>
<br><br>
<!--Reciept Uploading Sequence-->
<div id="wrapper">
<h3><font color="Black"><u> Insert a photo/digital-foot print given from NSBM</u> </font></h3>
</form><br>
<h5><font color="black">Click "Choose File" To Upload An Image</h5>

   <?php

     if($_SERVER['REQUEST_METHOD']=='POST'){
     //echo"<pre>";
     //print_r($_FILES;
     //echo"</pre>";


     //check for the file type
     if($_FILES['reciept']['type']=='image/jpeg'){

     $source=$_FILES['reciept']['tmp_name'];
     $destination="uploads/".$_FILES['reciept']['name'];


     if(move_uploaded_file($source,$destination)){
      //below lines for user to undertand if the file is uploaded or not
      echo"File Uploading Success!</br>";

       }else{

        echo"File Uploading Failed!</br>";
       }
      }else{

        echo"Unsuported File Type!</br>";
      }
     }

   ?>

<div id="viewer">

          <div class="image">
<br><br><br>
          <?php

           $array = glob("uploads/*.{jpg,jpeg,JPG,JPEG}",GLOB_BRACE);


           foreach($array as $file){

            echo"<img src='$file'/>";
           }

         ?>
         </div>
    </div>

<br>
<div id="drop">
<form method="post"enctype="multipart/form-data">
<input type="file"name="reciept"/>
<input type="submit"value="Upload" id="mybutton"/>
</form>
          </div>
</div>
<br><br><br><br>
<!--input box-->
<div id="viewer2">
<div id=textbox>
<br><br>
<lable><font color="black">Student Name</font></label>
<input type="text" name="studentName" val="">&nbsp;&nbsp;&nbsp;
<label><font color="black">Student-ID</font></label>
<input type="text" name="id" value=""><br><br>
<div id="click">
<button type="click" onclick="alert('Student Name = Student Name in the Students ID card \n\nStudent ID = ID Number in the Students ID Card')">Example</button>
</div>
<div class="button">
  <p>Picture Example</p>
  <figure>
    <img src="bbbb.png" width="400" height="300" alt="photo">
          </figure>
          </div>

</div>
</div>
</div>
</div>
<br><br>

</div>
  </body>
</html>
