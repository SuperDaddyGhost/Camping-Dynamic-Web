<?php
session_start();

require_once 'config.php';

require_once 'timer.php';

if (isset($_SESSION['admin_name'])) {
    header('location:admin_page.php');
    exit();
} elseif (isset($_SESSION['user_name'])) {
    header('location:user_page.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>
<body>

<a href="login_form.php" class="logo">Global Wild Swimming and Camping.</a>

<div class="forformm-container">
   <form action="" method="post">
      <h3>Login Now</h3>
      <?php
      if (isset($error)) {
         echo '<span class="error-msg">' . $error . '</span>';
      }
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <div class="g-recaptcha" data-type="image"  data-sitekey="6Lc6-LcmAAAAABB6_HoHfmav9tOh24vf0KLJkrzE"></div>
      <input type="submit" name="submit" value="Login Now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register now</a></p>
   </form>
</div>


</body>
</html>