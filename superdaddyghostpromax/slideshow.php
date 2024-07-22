<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time();?>">
</head>
<body>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="photos/camp1.jpeg">
  <div class="text">Camp 1</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="photos/camp2.jpeg">
  <div class="text">Camp 2</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="photos/camp3.jpeg">
  <div class="text">Camp 3</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="photos/camp4.jpeg">
  <div class="text">Camp 4</div>
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 

</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 