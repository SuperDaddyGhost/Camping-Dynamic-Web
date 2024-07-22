<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'superdaddyghostpromax';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

header("Content-type: text/xml");

echo "<?xml version='1.0' encoding='UTF-8'?>
      <rss version='2.0'>
        <channel>
            <title>Global Wild Swimming and Camping</title>
            <description>Global Wild Swimming and Camping provides camping and swimming information for visitors.</description>
            <link>http://localhost/superdaddyghostpromax/</link>";

$sql = "SELECT * FROM rssfeed ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Error executing the query: ' . mysqli_error($conn));
}

$num_rows = mysqli_num_rows($result);

for ($i = 0; $i < $num_rows && $row = mysqli_fetch_assoc($result); $i++) {
    echo "<item>";

    echo "<title>" . htmlspecialchars($row['title']) . "</title>";
    echo "<description>" . htmlspecialchars($row['description']) . "</description>";
    echo "<link>" . htmlspecialchars($row['link']) . "</link>";

    echo "</item>";
}

echo "</channel></rss>";

mysqli_close($conn);
?>