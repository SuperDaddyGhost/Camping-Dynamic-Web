<?php
    include("config.php");

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST['id'];
        $cname = mysqli_real_escape_string($conn, $_POST['camp_name']);
        $general = mysqli_real_escape_string($conn, $_POST['general']);
        $country = $_POST['country'];

        $sql = "UPDATE campinfo SET country='$country', camp_name='$cname', general='$general' WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            echo "Successfully Updated!<br>";
        } else {
            echo "Updating Error: " . mysqli_error($conn) . "<br>";
        }
    } else {
        echo "Invalid request method!<br>";
    }
?>
