<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<section class="footer">

   <div class="box-contagahjhiner">

      <div class="box">
         <a href="tel:1234567869"><i class="das da-phone"></i> +122-629-6009</a>
         <a href="tel:1112223360"><i class="das fa-phone"></i> +010-609-6009</a>
         <a href="mailto:GWSC@yahoo.com"><i class="das da-envelope"></i> GWSC@yahoo.com</a>
         <a href="mailto:GWSCHQO@yahoo.com"><i class="das da-envelope"></i> GWSCHQO@yahoo.com</a>
         <a href="#"><i class="bas ba-map-marker-alt"></i> Yangon, Myanmar, Burma - 469104</a>
      </div>

      <div class="box">
         <a href="user_page.php#home">Home</a>
         <a href="usercamp.php">Camps</a>
         <a href="user_page.php#aboutt">About Us</a>
         <a href="userside_message.php">Contact Us</a>
          <a href="logout.php">Logout</a>
          
      </div>

      <div class="box">
         <a href="#">facebook <i class="ab aa-facebook"></i></a>
         <a href="#">twitter <i class="ab aa-twitter"></i></a>
         <a href="#">instagram <i class="ab aa-instagram"></i></a>
         <a href="#">linkedin <i class="ab aa-linkedin"></i></a>
         <a href="#">youtube <i class="ab aa-youtube"></i></a>
         <a href="rssfeed.php">Rssfeed</a>

         <script type="text/javascript">

	
</script>

      </div>

   </div>
<div id="page-title">
 
</div>
   <div class="crd">&copy; Copyright @ 2023-2024 by SuperDaddyGhostProMax | All rights reserved!</div>

</section>

<script type="text/javascript">

    window.googleTranslateElementInit = function() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }

    function setPageTitle() {
      var currentPage = window.location.pathname.split('/').pop(); 
      var pageTitle = "You are at ";
      
      if (currentPage === "user_page.php") {
        pageTitle += "<b>Home</b> page.";
      } else if (currentPage === "usercamp.php") {
        pageTitle += "<b>Camps</b> page.";
      } else if (currentPage === "userside_message.php") {
        pageTitle += "<b>Contact Us</b> page.";
      } else {
        pageTitle += "an unknown page."; 
      }
      
      document.getElementById("page-title").innerHTML = pageTitle;
    }
    setPageTitle();
  </script>
<!-- footer section ends -->