<html>
<head>
<title>Accomodation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
max-width: 1000px;
position: relative;
margin: auto;
}

/* Next & previous buttons */
.prev, .next {
cursor: pointer;
position: absolute;
top: 50%;
width: auto;
padding: 16px;
margin-top: -22px;
color: white;
font-weight: bold;
font-size: 18px;
transition: 0.6s ease;
border-radius: 0 3px 3px 0;
user-select: none;
}

/* Position the "next button" to the right */
.next {
right: 0;
border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
color: #f2f2f2;
font-size: 15px;
padding: 8px 12px;
position: absolute;
bottom: 8px;
width: 100%;
text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
color: #f2f2f2;
font-size: 12px;
padding: 8px 12px;
position: absolute;
top: 0;
}

/* The dots/bullets/indicators */
.dot {
cursor: pointer;
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbb;
border-radius: 50%;
display: inline-block;
transition: background-color 0.6s ease;
}

.active, .dot:hover {
background-color: #717171;
}

/* Fading animation */
.fade {
-webkit-animation-name: fade;
-webkit-animation-duration: 1.5s;
animation-name: fade;
animation-duration: 1.5s;
}

@-webkit-keyframes fade {
from {opacity: .4}
to {opacity: 1}
}

@keyframes fade {
from {opacity: .4}
to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
.prev, .next,.text {font-size: 11px}
}
</style>
<link rel="stylesheet" type="text/css"  href="accom.css">
</head>

<body>
<div class="container">

    <div id="header">
      <div class="logo">
        <a href="http://www.nsbm.ac.lk/">
          <img src="logo.jpg">
          </a>
        </div>
      </div>

<div class="header">
  <h1 style="text-align:center;">Hostel Management System</h1>
  </div>
<div class="nav">
<ul >
  <li><a href="index.php">Home </a></li>
  <li><a href="accom.php">Student Accomodation</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="contact.php">Contact</a></li>
  </ul>
</div>
<div class="potential">
  <h2><u>Hostel Complex Potential</u></h2>
  <ul><li><p>Hostel residence facility is only available for girls. Hostel is built with 9 number of floors. In hostel basement the Cafeteria is located. It's common  ground for both boys and girls.
  For student accomodation there are 8 number of floors collectively containing 350 number of rooms, providing accomodation facility for around 700 NSBM Girls.</p> </li>
  <li><p>The following is a fully facilitated hostel Room. A single room is shared by two roommates. Electronic Keycard is given to access room by making room more secure.</p></li>
  <li><p>Study Area is reserved for study purposes.</p></li>
  <li><p>Gihans Food court in hostel complex is take care the responsibility of providing food for students</p></li>
  <li><p>New Edge Space is comprised of three subcafeteria that serves Indian Dinning cusine, short eats and traditional cusine</p></li></ul>

  <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="hostel.jpg" style="width:100%">
    <div class="text">Hostel</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="room.jpg" style="width:100%">
    <div class="text">Room</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="study area.jpg" style="width:100%">
    <div class="text">Study Area</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="canteen.jpg" style="width:100%">
    <div class="text">Canteen</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="edge.jpg" style="width:100%">
    <div class="text">Edge</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
  </div>

  <script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
  </script>




  <div class="staff">
    <h2><u>Word from Warden</u></h2>

      <p>Accommodation for nsbm children is an important requirement. The hostel facilities offered by the universities are worth it. Around 700 girls from remote areas have been provided with protection. We hope they have the right discipline. It is our responsibility to inform you of the laws here. The monthly payment is also very important. The Hostel Management System (HMS) has been introduced for this purpose. The Hostel Management System helps you to pay for the hostel fees and to renew the room key. </p>
  <br>
  </div>
  </div>
</div>

  </body>
</html>
