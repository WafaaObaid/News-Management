


<?php
include "connectionToDatabase.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "UPDATE news SET deleted = 0 WHERE id = $id";
    if ($connection->query($sql) === TRUE) {
        header("Location: deleted_news.php");
        exit();
    } else {
        echo "Error: " . $connection->error;
    }
}
?>
