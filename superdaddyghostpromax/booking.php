<?php
// Include the config.php file to establish a database connection
include 'config.php';

// Check if the form is submitted
if (isset($_POST['book'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $campsite_name = $_POST['campsite_name'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];

    // Prepare and execute the SQL INSERT query
    $sql = "INSERT INTO booking_new (name, email, number, campsite_name, check_in_date, check_out_date)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $email, $number, $campsite_name, $check_in, $check_out);

    if ($stmt->execute()) {
     
        session_start();
        $_SESSION['success_msg'] = "Booking sent successfully.";
        header("Location: booking.php#booking"); 
        exit;
    } else {
      
        echo "Error in database insertion: " . $stmt->error;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
</head>
<body>
    
<!-- header start  -->
<?php include 'user_header.php'; ?>
<!-- header end  -->

<!-- reservation section starts  -->
<section class="booking" id="booking">
   <form action="" method="post">
      <h3>Make a reservation</h3>
      <?php if (isset($_SESSION['success_msg'])): ?>
         <span class="success-msg"><?php echo $_SESSION['success_msg']; ?></span>
         <?php unset($_SESSION['success_msg']); ?>
      <?php endif; ?>
      <div class="flex">
         <div class="box">
            <p>Your name <span>*</span></p>
            <input type="text" name="name" maxlength="50" required placeholder="enter your name" class="input">
         </div>

         <div class="box">
            <p>Your email <span>*</span></p>
            <input type="email" name="email" maxlength="50" required placeholder="enter your email" class="input">
         </div>
         
         <div class="box">
            <p>Your number <span>*</span></p>
            <input type="number" name="number" maxlength="10" min="0" max="9999999999" required placeholder="enter your number" class="input">
         </div>

         <div class="box">
            <p>Camp Site Name <span>*</span></p>
            <input type="text" name="campsite_name" maxlength="50" required placeholder="enter the camp name" class="input">
         </div>

         <div class="box">
            <p>Check in <span>*</span></p>
            <input type="date" name="check_in" class="input" required>
         </div>

         <div class="box">
            <p>Check out <span>*</span></p>
            <input type="date" name="check_out" class="input" required>
         </div>
      </div>
      <input type="submit" value="Book Now" name="book" class="btn">
   </form>
</section>

<!-- footer start  -->
<?php include 'user_footer.php'; ?>
<!-- footer end  -->

</body>
</html>
