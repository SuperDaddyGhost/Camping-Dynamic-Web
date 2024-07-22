<?php

@include 'config.php';

if (isset($_POST['submit'])) {

   $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
   $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
   $name = $first_name . ' ' . $last_name;
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = "SELECT * FROM user WHERE email = '$email'";

   $result = mysqli_query($conn, $select);

   if ($result) {
      $row_count = mysqli_num_rows($result);

      if ($row_count > 0) {
         $error = 'User already exists!';
      } else {
         if ($pass != $cpass) {
            $error = 'Passwords do not match!';
         } else {
            $insert = "INSERT INTO user (first_name, last_name, name, email, password, user_type) VALUES ('$first_name', '$last_name', '$name', '$email', '$pass', '$user_type')";
            if (mysqli_query($conn, $insert)) {
               header('location: index.php');
               exit();
            } else {
               $error = 'Error: ' . mysqli_error($conn);
            }
         }
      }
   } else {
      $error = 'Error executing query: ' . mysqli_error($conn);
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<a href="login_form.php" class="logo">Global Wild Swimming and Camping.</a>

<div class="forformm-container">
   <form action="" method="post">
      <h3>Register Now</h3>
      <?php
      if (isset($error)) {
         echo '<span class="error-msg">' . $error . '</span>';
      }
      ?>
      <input type="text" name="first_name" required placeholder="Enter your first name">
      <input type="text" name="last_name" required placeholder="Enter your last name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      <select name="user_type">
         <option value="user">User</option>
         <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="Register Now" class="form-btn">
      <p>Already have an account? <a href="login_form.php">Login now</a></p>
   </form>
</div>

</body>
</html>
