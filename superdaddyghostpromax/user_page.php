<?php

session_start();

if (!isset($_SESSION['user_name'])) {
   header('location:login_form.php');
   exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'user_header.php'; ?>
<?php include 'slideshow.php'; ?>

<form action="search_process.php" method="post">
  <input type="text" name="search-key" placeholder="Search Campsite">
  <button type="submit" name="search">Search</button>
</form>




<div class="conptainer">

   <div class="contxthjent">
      <h3>Welcome <span><?php echo $_SESSION['user_name']; ?></span></h3>
      
   </div>

</div>

 <br>

            <h2 class="wt">Wearable Technology</h2>
            <div class="row">
                <div class="col-4">
                    <img src="photos/GPS.jpg" alt="">
                    <h4>GPS</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="photos/headtorch.jpg" alt="">
                    <h4>Headtorch</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>

                    </div>
                    <p>$35.00</p>
                </div>
                <div class="col-4">
                    <img src="photos/walkike.jpg" alt="">
                    <h4>Walkie Talkie</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>$45.00</p>
                </div>
                <div class="col-4">
                    <img src="photos/torch.jpg" alt="">
                    <h4>Torch</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>$40.00</p>
                </div>
            </div>


<section class="aboutt" id="aboutt">

<div class="drowaa">
      <div class="image">
      </div>
      <div class="contaaqent">
         <h3>About Us</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi laborum maxime eius aliquid temporibus unde?</p>
         
      </div>
   </div>

</section>

<!--google map and youtube start-->

<div>
   <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2261.579323325929!2d-3.0717999999999996!3d55.47!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTXCsDI4JzEyLjAiTiAzwrAwNCcxOC41Ilc!5e0!3m2!1sen!2smm!4v1686216830484!5m2!1sen!2smm" 
   width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div>
   <iframe width="360" height="215" 
   src="https://www.youtube.com/embed/Jf-FWeysxTI" title="YouTube video player" frameborder="0" 
   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<!--google map and youtube end-->

<?php include 'user_footer.php'; ?>


</body>
</html>
