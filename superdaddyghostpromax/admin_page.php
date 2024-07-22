<?php

session_start();

if (!isset($_SESSION['admin_name'])) {
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
   <title>Admin Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'admin_header.php'; ?>

<div class="contghainer">

   <div class="conmvdtent">
      <h3>Hi, <span>Admin</span></h3>
      <h3>Welcome <span><?php echo $_SESSION['admin_name']; ?></span></h3>
      <p>This is an admin page</p>
      <a href="login_form.php" class="btn">Login</a>
      <a href="register_form.php" class="btn">Register</a>
      <a href="logout.php" class="btn">Logout</a>
   </div>

</div>

<?php include 'admin_footer.php'; ?>

</body>
</html>
