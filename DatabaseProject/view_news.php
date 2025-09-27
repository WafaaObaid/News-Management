

<?php
session_start();

include "connectionToDatabase.php";
 $sql = "SELECT * FROM news WHERE deleted = 0";
$result = $connection->query($sql);

echo $result->num_rows;
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view_news.css">

    <title>View News</title>
</head>
<body>
    <?php
    if(isset($_GET["created"]) && $_GET["created"]==true){
        echo "<h3 style='color:green; text-align:center;'>Category created successfully</h3>";}
    ?>

    <table>
    <tr>
        <th>Title</th>
        <th>Category</th>
        <th>Content</th>
        <th>Image</th>
        <th>User</th>
    </tr>

    <?php
    if($result->num_rows != 0){
        while($row = $result->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row["title"]; ?></td>
                <td><?php echo $row["category_name"]; ?></td>
                <td><?php echo $row["content"]; ?></td>
                <td>
                    <?php if(!empty($row["image"])) { ?>
                        <img src="<?php echo $row["image"]; ?>" width="100">
                    <?php } else {
                        echo "No image";
                    } ?>
                </td>
                <td><?php echo $row["user_id"]; ?></td>

                <td>
                   <a href="deletedNews.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete it?');">Delete</a>
                    <a href="updateNews_ui.php?id=<?php echo $row["id"] ?>" >Update</a>
                </td>
            </tr>
    <?php }
    }
    ?>
</table>

<div class="btn-container">
        <a href="addNews.php" class="add-btn"> Add News</a>
    </div>

    <div class="btn-container">
        <a href="Deleted_News.php" class="add-btn"> Show Deleted News</a>
    </div>

    <div class="btn-container">
        <a href="dashbordUI.php" class="add-btn"> Go Back To Dashboard</a>
    </div>

  <footer>
    <p>&copy; 2025 News Management. All rights reserved.</p>
</footer>
  



</body>
</html>