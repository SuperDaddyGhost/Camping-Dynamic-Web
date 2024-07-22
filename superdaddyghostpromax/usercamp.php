<?php
session_start();

// Include the database connection from config.php
include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Camping List (User View)</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>">
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>
<?php
include("user_header.php"); // Include the general header

echo "<div id='google_translate_element'></div>";
echo "<hr>";

$sql = "SELECT * FROM camp";
$result = mysqli_query($conn, $sql); // Use $conn instead of $connection

$num_rows = mysqli_num_rows($result);

if ($num_rows == 0) {
    echo "There is no camping information!<br>";
} else {
    while ($record = mysqli_fetch_assoc($result)) {
        echo "<div class='row'>";
        echo "<div><h3>".$record['camp_name']."</h3></div>";
        echo "<div class='row'>";
        echo "<div class='col-5 col-m-5 col-s-12'><iframe src='".htmlspecialchars($record['location'])."' width='300'></iframe></div>";
        echo "<div class='col-4 col-m-4 col-s-12'>Address:".htmlspecialchars($record['address'])."</div>";
        echo "<div class='col-3 col-m-3 col-s-12'>Country:".htmlspecialchars($record['country'])."</div>";
        echo "</div>
              <div class='row'>";
        echo "<div class='general-info col-6 col-m-6 col-s-12'><h4>General Information:</h4>".htmlspecialchars($record['about'])."</div>";
        echo "<div class='col-5 col-m-5 col-s-12'><img class='info-photo' src='".htmlspecialchars($record['photo'])."'></div>";
        echo "</div>";
        echo "<a href='features.php?id=".$record['id']."'>Features</a> ||";
        echo " <a href='attractions.php?id=".$record['id']."'>Local Attractions</a> ||";
        echo " <a href='reviews.php?id=".$record['id']."'>Reviews</a> ||";
        echo " <a href='booking.php?id=".$record['id']."'>Book</a>";
        echo "<hr></div>";
    }
}

include("user_footer.php");
?>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script>

</body>
</html>