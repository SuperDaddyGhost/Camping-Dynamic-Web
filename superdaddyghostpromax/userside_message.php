<?php
session_start();

// Check if the form is submitted
if (isset($_POST['send'])) {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    // Validate form data (add your own validation rules as needed)

    // Include the database connection code
    include 'config.php';

    // Prepare the SQL statement
    $sql = "INSERT INTO contacts (name, email, number, message) VALUES (?, ?, ?, ?)";

    // Prepare and bind the parameters
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $number, $message);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        // Set a success message in session
        $_SESSION['success_msg'] = "Message sent successfully!";
        header("Location: $_SERVER[PHP_SELF]");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>

<?php include 'user_header.php'; ?>

    <!-- contact section starts  -->
    <section class="umessage" id="umessage">
        <div class="row">
            <?php if (isset($_SESSION['success_msg'])): ?>
                <span class="success-msg"><?php echo $_SESSION['success_msg']; ?></span>
                <?php unset($_SESSION['success_msg']); ?>
            <?php endif; ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <h3>Send us a Message</h3>
                <input type="text" name="name" required placeholder="Enter your name">
                <input type="email" name="email" required placeholder="Enter your email">
                <input type="number" name="number" required placeholder="Enter your phone number">
                <textarea name="message" required placeholder="Enter your message"></textarea>
                <input type="submit" name="send" value="Send Message" class="btn">
            </form>

            <hr>

	<a href='privacyandpolicy.php'>Privacy and Policy</a>


	<hr>

        </div>
    </section>
    <!-- contact section ends -->

    <?php include 'user_footer.php'; ?>

</body>
</html>
