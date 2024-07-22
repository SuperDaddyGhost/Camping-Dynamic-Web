<?php

include 'config.php';

// Fetch all the bookings from the booking_new table
$sql = "SELECT * FROM booking_new";
$result = mysqli_query($conn, $sql);

// Check if any bookings are found
if (mysqli_num_rows($result) > 0) {
    // Store the data in an array for later use
    $bookings = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $bookings = [];
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Booking List</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <?php include 'admin_header.php'; ?>

   <div class="container">
      <h3>Booking List</h3>
      <?php if (count($bookings) > 0) : ?>
         <table>
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Number</th>
                  <th>Campsite Name</th>
                  <th>Check-in Date</th>
                  <th>Check-out Date</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach ($bookings as $booking) : ?>
                  <tr>
                     <td><?php echo $booking['name']; ?></td>
                     <td><?php echo $booking['email']; ?></td>
                     <td><?php echo $booking['number']; ?></td>
                     <td><?php echo $booking['campsite_name']; ?></td>
                     <td><?php echo $booking['check_in_date']; ?></td>
                     <td><?php echo $booking['check_out_date']; ?></td>
                  </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
      <?php else : ?>
         <p>No bookings found.</p>
      <?php endif; ?>
   </div>
   <?php include 'admin_footer.php'; ?>
</body>
</html>
