
<?php
session_start();

$id = $_SESSION["authUser"]["id"];

include "connectionToDatabase.php";
$sql = "SELECT * FROM category";
$result = $connection->query($sql);

echo $result->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view_category_ui.css">

    <title>View Category</title>
</head>
<body>
    <?php
    if(isset($_GET["created"]) && $_GET["created"]==true){
        echo "<h3 style='color:green; text-align:center;'>Category created successfully</h3>";}
    ?>

    <table>
        <tr>
            <th>Category Name</th>
            <th>Category Kind</th>
        </tr>

        <?php
        if($result->num_rows != 0){
            while($row = $result->fetch_assoc()){?>
            <tr>
                <td>
                    <?php echo $row["category_name"] ?>
            </td>

            <td>
                <?php echo $row["category_kind"] ?>
            </td>

           
            </tr>

          <?php  }
        }
        ?>


    </table>

    <div class="btn-container">
        <a href="addCategory_ui.php" class="add-btn"> Add Category</a>
    </div>

    <div class="btn-container">
        <a href="dashbordUI.php" class="add-btn">Back to Dashboard</a>
    </div>

<footer>
    <p>&copy; 2025 News Management. All rights reserved.</p>
</footer>


</body>
</html>