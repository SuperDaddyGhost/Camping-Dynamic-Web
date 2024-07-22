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

        // Prepare and execute a query to fetch features associated with the campsite
        $stmt = $conn->prepare("SELECT * FROM features WHERE campid = ?");
        $stmt->bind_param("i", $cid);
        $stmt->execute();
        $features_result = $stmt->get_result();

        if ($features_result->num_rows > 0) {
            echo "<ol>";
            while ($feature = $features_result->fetch_assoc()) {
                $list = $feature['list'];
                $arr = explode(", ", $list);
                foreach ($arr as $v) {
                    echo "<li>$v</li>";
                }
            }
            echo "</ol>";
        } else {
            echo "No features found for this campsite.";
        }
    } else {
        echo "Campsite not found.";
    }
} else {
    echo "Invalid request. Please go back to the search page.";
}

include("user_footer.php");
?>
