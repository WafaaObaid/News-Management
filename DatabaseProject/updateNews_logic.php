

<?php
include "connectionToDatabase.php";

if (isset($_POST["update"])) {
    $id = intval($_POST["id"]);
    $title = $_POST["new_title"];
    $category_name = $_POST["new_category_name"];
    $content = $_POST["new_content"];

    $sql_old = "SELECT image FROM news WHERE id = $id";
    $result_old = $connection->query($sql_old);
    $old_news = $result_old->fetch_assoc();
    $image_path = $old_news["image"];

    if (isset($_FILES['new_image']) && $_FILES['new_image']['error'] == 0) {
        $image_name = time() . "_" . basename($_FILES['new_image']['name']);
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }
        $target_file = $target_dir . $image_name;
        if (move_uploaded_file($_FILES['new_image']['tmp_name'], $target_file)) {
            $image_path = $target_file;
        }
    }

    $sql = "UPDATE news SET title = '$title', category_name = '$category_name', content = '$content', image = '$image_path' WHERE id = $id";

    if ($connection->query($sql) === TRUE) {
        header("Location: view_news.php?updated=true");
        exit();
    } else {
        echo "Error: " . $connection->error;
    }
}
?>
