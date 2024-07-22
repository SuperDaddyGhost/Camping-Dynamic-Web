<?php
include("config.php"); 

if (isset($_GET['id'])) {
    $id =  $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm'])) {
        $sql = "DELETE FROM camp WHERE id=$id";

        if (mysqli_query($conn, $sql)) {

            echo '<script>alert("Successfully Deleted!");</script>';
        } else {
       
            echo '<script>alert("Deletion Error: ' . mysqli_error($conn) . '");</script>';
        }
    } else {
  
        echo '
        <script>
            function confirmDeletion() {
                if (confirm("Are you sure you want to delete this camp?")) {
                    document.getElementById("delete-form").submit();
                }
            }
        </script>';

        echo '
        <form id="delete-form" method="POST" style="display: inline-block;">
            <input type="hidden" name="confirm" value="true">
            <button type="button" onclick="confirmDeletion()">Delete</button>
        </form>
        <button type="button" onclick="location.href=\'admincamp.php\'">No</button>';
    }
} else {
    echo "Invalid or missing ID parameter.<br>";
}
?>
