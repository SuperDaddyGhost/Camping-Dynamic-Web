<?php
include 'config.php';

// Retrieve data from the database
$sql = "SELECT id, name, email FROM user WHERE user_type = 'user'";
$result = mysqli_query($conn, $sql);

// Check if any data is found
if (mysqli_num_rows($result) > 0) {
    // Fetch the data as an associative array
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $data = []; // Empty array if no data is found
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- header section starts  -->
<?php include 'admin_header.php'; ?>
<!-- header section ends -->

<!-- data section starts  -->
<section class="grid">
    <h1 class="heading">User Data</h1>
    <div class="box-container">
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $row): ?>
                <div class="box">
                    <p>ID: <span><?php echo $row['id']; ?></span></p>
                    <p>Name: <span><?php echo $row['name']; ?></span></p>
                    <p>Email: <span><?php echo $row['email']; ?></span></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="box" style="text-align: center;">
                <p>No data found!</p>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- data section ends -->

<!-- footer section starts  -->
<?php include 'admin_footer.php'; ?>
<!-- footer section ends -->

</body>
</html>


