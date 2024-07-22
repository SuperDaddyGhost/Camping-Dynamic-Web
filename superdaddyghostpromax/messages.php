<?php
include 'config.php';

$sql = "SELECT * FROM contacts ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    $messages = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $messages = []; 
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- header section starts  -->
<?php include 'admin_header.php'; ?>
<!-- header section ends -->

<!-- messages section starts  -->
<section class="grid">
    <h1 class="heading">Messages</h1>
    <div class="box-contaisaaener">
        <?php if (!empty($messages)): ?>
            <?php foreach ($messages as $message): ?>
                <div class="box">
                    <p>Name: <span><?php echo $message['name']; ?></span></p><br>
                    <p>Email: <span><?php echo $message['email']; ?></span></p><br>
                    <p>Number: <span><?php echo $message['number']; ?></span></p><br>
                    <p>Message: <span><?php echo $message['message']; ?></span></p><br>
                </div>
                
            <?php endforeach; ?>
        <?php else: ?>
            <div class="box" style="text-align: center;">
                <p>No messages found!</p>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- messages section ends -->

<!-- footer section starts  -->
<?php include 'admin_footer.php'; ?>
    <!-- footer content goes here -->
</footer>
<!-- footer section ends -->

</body>
</html>
