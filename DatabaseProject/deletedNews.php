
<?php
include "connectionToDatabase.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "UPDATE news SET deleted = 1 WHERE id = $id";
    if ($connection->query($sql) === TRUE) {
        header("Location: view_news.php?deleted=true");
    } else {
        echo "Error: " . $connection->error;
    }
} else {
    echo "No news ID provided.";
}
?>
