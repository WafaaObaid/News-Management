
<?php
include "connectionToDatabase.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM news WHERE id = $id";
    $result = $connection->query($sql);
    $news = $result->fetch_assoc();
} else {
    echo "No news id provided.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update News</title>
    <link rel="stylesheet" href="updateNews.css">
</head>
<body>
     <div class="container">
    <h1 style="text-align:center; color:white;">Update News</h1>
    <form action="updateNews_logic.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $news['id']; ?>">

        <input type="text" name="new_title" placeholder="Title"
               value="<?php echo htmlspecialchars($news['title']); ?>" required><br>

        <select name="new_category_name" required>
            <option value="">Select Category</option>
            <?php
            $categories = $connection->query("SELECT category_name FROM category");
            while ($row = $categories->fetch_assoc()) {
                $selected = ($row['category_name'] == $news['category_name']) ? "selected" : "";
                echo "<option value='{$row['category_name']}' $selected>{$row['category_name']}</option>";
            }
            ?>
        </select><br>

        <textarea name="new_content" placeholder="Content"><?php echo htmlspecialchars($news['content']); ?></textarea><br>

        <?php if (!empty($news['image'])): ?>
            <p style="color:white;">Current Image:</p>
            <img src="<?php echo $news['image']; ?>" alt="News Image" width="120"><br>
        <?php endif; ?>

        <input type="file" name="new_image" accept="image/*"><br>

        <input type="submit" value="Update" name="update">
    </form>
    </div>
    
</body>
</html>

