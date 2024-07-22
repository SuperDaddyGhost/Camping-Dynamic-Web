<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Attractions</title>
</head>
<body>
    <?php
        include("user_header.php");
        include("config.php");

        if (isset($_GET['id'])) {
            $cid = $_GET['id'];

            // Prepare and execute a query to fetch campsite information
            $stmt = $conn->prepare("SELECT * FROM camp WHERE id = ?");
            $stmt->bind_param("i", $cid);
            $stmt->execute();
            $campsite_result = $stmt->get_result();
            $campsite = $campsite_result->fetch_assoc();

            if ($campsite) {
                echo "<h3>" . $campsite['camp_name'] . "</h3>";

                // Prepare and execute a query to fetch attractions associated with the campsite
                $stmt = $conn->prepare("SELECT * FROM attractions WHERE campid = ?");
                $stmt->bind_param("i", $cid);
                $stmt->execute();
                $attractions_result = $stmt->get_result();

                if ($attractions_result->num_rows > 0) {
                    while ($attraction = $attractions_result->fetch_assoc()) {
                        echo "<h4>Attraction ID: " . $attraction['id'] . "</h4>";
                        echo "<p>List: " . $attraction['list'] . "</p>";
                        echo "<p>Remark: " . $attraction['remark'] . "</p>";
                        echo "<hr>";
                    }
                } else {
                    echo "No attractions found for this campsite.";
                }
            } else {
                echo "Campsite not found.";
            }
        } else {
            echo "Invalid request. Please go back to the search page.";
        }

        include("user_footer.php");
    ?>
</body>
</html>