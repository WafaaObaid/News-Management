
<?php

session_start();
include "connectionToDatabase.php";
 

$title = $_POST["title"];
$category_name = $_POST["category_name"];
$content = $_POST["content"];
$user_id = $_SESSION["authUser"]["id"];
$image = "";

if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
    $image_name = time() . "_" . basename($_FILES['image']['name']);
    $target_dir = "uploads/";
    if(!is_dir($target_dir)){
        mkdir($target_dir, 0755, true);
    }
    $target_file = $target_dir . $image_name;
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
        $image = $target_file;
    }
}



$sql = "INSERT INTO news (title, category_name, content, user_id, image) 
        VALUES ('$title', '$category_name', '$content', '$user_id', '$image')";

if($connection->query($sql) == TRUE){
    header("Location: view_news.php?created=true");
} else {
    echo "Error: " . $connection->error;
}













?>
