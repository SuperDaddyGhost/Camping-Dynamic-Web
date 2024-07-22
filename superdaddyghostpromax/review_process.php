<?php

include 'config.php';

$campid = $_POST['campid'];
$msg = $_POST['message'];

$sql = "INSERT INTO reviews (message, campid) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $msg, $campid);
if ($stmt->execute()) {
    header("Location: review.php?id=".$campid);
    exit;
} else {
 
    echo "Error in database insertion: " . $stmt->error;
}

mysqli_close($conn);
?>
