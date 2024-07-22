<?php

include 'config.php';

if (isset($_POST['submit'])) {

    $campid = $_POST['campid'];

    $message = $_POST['message'];
    $username = $_POST['username']; 
    $sql = "INSERT INTO reviews (campid, username, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $campid, $username, $message);

    if ($stmt->execute()) {
       
        header("Location: reviews.php?id=$campid");
        exit;
    } else {
   
        echo "Error in database insertion: " . $stmt->error;
    }
}

if (!isset($_GET['id'])) {
    echo "Invalid camp ID.";
} else {
    $campid = $_GET['id'];

    $sql = "SELECT * FROM camp WHERE id=$campid";
    $result = mysqli_query($conn, $sql);
    $record = mysqli_fetch_assoc($result);

    include 'user_header.php'; 

    echo "<h3>".$record['camp_name']."</h3>";

    $sql1 = "SELECT * FROM reviews WHERE campid=$campid";
    $result1 = mysqli_query($conn, $sql1);
    $num_rows = mysqli_num_rows($result1);

    if ($num_rows == 0) {
        echo "No reviews!";
    } else {
        echo "<ul>"; 
        while ($record1 = mysqli_fetch_assoc($result1)) {
            echo "<li>".$record1['message']." by <b>".$record1['username']."</b></li>";
        }
        echo "</ul>"; 
    }

   
    echo '
    <hr>
    <div>
        <form action="reviews.php" method="post">
            <input type="hidden" name="campid" value="'.$campid.'">
            Enter your username:
            <input type="text" name="username" required><br>
            Enter your message:
            <textarea name="message"></textarea><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>';

    include 'user_footer.php'; // Include the user footer
}

// Close the database connection
mysqli_close($conn);
?>
