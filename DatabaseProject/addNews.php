
<?php
include "connectionToDatabase.php";

$sql = "SELECT category_name FROM category";
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addNews.css">

    <title>Add News</title>
</head>
<body>
    <h1>Add News To Show !</h1>
    <form action="add_news_logic.php" method="post" enctype="multipart/form-data">

    <input type="text" name="title" placeholder="Title" required><br>

    <select name="category_name" required>
            <option value="">Select Category</option>
            <?php while($row = $result->fetch_assoc()){ ?>
                <option value="<?php echo $row['category_name']; ?>">
                    <?php echo $row['category_name']; ?>
                </option>
            <?php } ?>
        </select><br>

    <textarea name="content" placeholder="Content"></textarea><br>

    <input type="file" name="image" accept="image/*"><br>

    <input type="submit" value="Add News" name="add">
</form>
<footer>
    <p>&copy; 2025 News Management. All rights reserved.</p>
</footer>
    
</body>
</html>