<?php
// Check if a session is already active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!-- header section starts  -->
<link rel="stylesheet" href="css/style.css">

<section class="flfdfex">
 <h1>Global Wild Swimming and Camping</h1>
   <nav class="navbar">
      <div>
         <a href="user_page.php">GWSC</a>
      </div>
      <ul>
         <li>
            <a href="user_page.php">Home</a>
         </li>
         <li>
            <a href="usercamp.php">Camp Sites</a>
         </li>
         <li>
            <a href="userside_message.php">Contact Us</a>
         </li>
         <li>
            <a href="user_page.php#aboutt">About Us</a>
         </li>
         <li>
            <a href="logout.php" class="btn">Logout</a>
         </li>
      </ul>
      <div id="google_translate_element"></div>
   </nav>
   <div id="menu-btn" class="fas fa-fars"></div>
</section>

<!-- header section ends -->
