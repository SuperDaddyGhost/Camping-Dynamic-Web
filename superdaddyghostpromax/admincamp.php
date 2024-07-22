<?php
session_start();



// Database credentials
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'superdaddyghostpromax';

// Establish a connection to the database
$conn = mysqli_connect($host, $user, $password, $database);

// Check the connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Camping List</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>">
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>
<?php
include("admin_header.php"); 

echo "<div id='google_translate_element'></div>";

echo " <a href='campingentry.php'>Entry</a>";	


$sql = "SELECT * FROM camp";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "There is no camping information!<br>";
} else {
    while ($record = mysqli_fetch_assoc($result)) {
        echo "<div class='row'>";
        echo "<div><h3>" . htmlspecialchars($record['camp_name']) . "</h3></div>";
        echo "<div class='row'>";
        echo "<div class='col-5 col-m-5 col-s-12'><iframe src='" . htmlspecialchars($record['location']) . "' width='300'></iframe></div>";
        echo "<div class='col-4 col-m-4 col-s-12'>Address:" . htmlspecialchars($record['address']) . "</div>";
        echo "<div class='col-3 col-m-3 col-s-12'>Country:" . htmlspecialchars($record['country']) . "</div>";
        echo "</div>
              <div class='row'>";
        echo "<div class='general-info col-6 col-m-6 col-s-12'><h4>General Information:</h4>" . htmlspecialchars($record['about']) . "</div>";
        echo "<div class='col-5 col-m-5 col-s-12'><img class='info-photo' src='" . htmlspecialchars($record['photo']) . "'></div>";
        echo "</div>";
        echo "<a href='edit_camp.php?id=" . $record['id'] . "'>Edit</a> ||";
        echo " <a href='delete_camp.php?id=" . $record['id'] . "'>Delete</a>";
        echo "<hr></div>";
    }
}

include("admin_footer.php");
?>

<script type="text/javascript">
    document.getElementById("page-title").innerHTML = "You are at <b>Admin Camping List</b> page.";
</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script>

</body>
</html>