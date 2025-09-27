
<?php
include "connectionToDatabase.php";
$sql = "SELECT * FROM news WHERE deleted = 1";
$result = $connection->query($sql);
?>
    <link rel="stylesheet" href="Deleted_News.css">

    <div class="container">
<h2>Deleted News</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Title</th>
        <th>Category</th>
        <th>Content</th>
        <th>Actions</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['category_name']; ?></td>
        <td><?php echo $row['content']; ?></td>
        <td>
            <a href="restoreNews.php?id=<?php echo $row['id']; ?>">Restore</a>
        </td>
    </tr>
    <?php } ?>
</table>
</div>
<br>
<a href="view_news.php"> Restore news</a>

<footer>
    <p>&copy; 2025 News Management. All rights reserved.</p>
</footer>
