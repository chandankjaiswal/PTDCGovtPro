<!DOCTYPE html>
<html lang='en'>
<html>
<title>PTDC</title>
<head>
  <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link type="text/css" rel="stylesheet" href="css/style.css">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script> 
</head> 
<style>
.mySlides {display:none;}
</style>
<body id="cssmenu">
  
  <ul>
   <li class='active'><a href='main.php'><span>Home</span></a></li>
   <li><a href='news.php'><span>News</span></a></li>
   <li><a href='contect.php'><span>Contact</span></a></li>
   <li><a href='blog.php'><span>Blog</span></a></li>
      <li><a href='about.php'><span>About</span></a></li>
   <li><a href='feedback.php'><span>Feedback</span></a></li>
      <li><a href='register1.php'><span>Login</span></a></li>
</ul>

<marquee behavior="alternate">Pondicherry Tourism Development Corporation</marquee>

<h2 class="w3-center">Pondicherry Tourism Development Corporation</h2>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="Image/pondi.jpg" style="width:100%">
  <img class="mySlides" src="Image/home.jpg" style="width:100%">

  <img class="mySlides" src="Image/auroville1.jpg" style="width:105%">
  <img class="mySlides" src="Image/ptdc.jpg" style="width:105%">
    <img class="mySlides" src="Image/home1.jpg" style="width:105%">
<!--button class="w3-button w3-black w3-display-left" onclick="plusDivs(-

1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs

(1)">&#10095;</button-->
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>