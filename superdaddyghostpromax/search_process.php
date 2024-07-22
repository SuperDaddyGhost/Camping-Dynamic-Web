<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Camping List</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time();?>">
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>
<?php
    include("user_header.php");
    include("config.php");

    echo "<div id='google_translate_element'></div>";

    // Check if the search form is submitted
    if (isset($_POST['search'])) {
        $search_key = $_POST['search-key'];
        $sql = "SELECT * FROM camp WHERE camp_name LIKE '%$search_key%' OR country LIKE '%$search_key%'";
    } else {
        $sql = "SELECT * FROM camp";
    }

    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows == 0) {
        echo "There is no information!<br>";
    } else {
        while ($record = mysqli_fetch_assoc($result)) {
            echo "<div class='row'>";              
            echo "<div><h3>".$record['camp_name']."</h3></div>";
            echo "<div class='row'>";              
            echo "<div class='col-5 col-m-5 col-s-12'><iframe src='".$record['location']."' width='300'></iframe></div>";
            echo "<div class='col-4 col-m-4 col-s-12'>Address:".$record['address']."</div>";
            echo "<div class='col-3 col-m-3 col-s-12'>Country:".$record['country']."</div>";
            echo "</div>
                    <div class='row'>";
            echo "<div class='general-info col-6 col-m-6 col-s-12'><h4>General Information:</h4>".$record['about']."</div>";
            echo "<div class='col-5 col-m-5 col-s-12'>
                    <img class='info-photo' src='".$record['photo']."'></div>";
            echo "</div>";
            echo "<a href='features.php?id=".$record['id']."'>Features</a> ||";
            echo "<a href='attractions.php?id=".$record['id']."'>Local Attractions</a> ||";
            echo "<a href='reviews.php?id=".$record['id']."'>Reviews</a>";
            echo "<hr></div>";
        }
    }

    include("user_footer.php");
    ?>

    <script type="text/javascript">
        document.getElementById("page-title").innerHTML = "You are at <b>Search</b> page.";
    </script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>
</body>
</html>

