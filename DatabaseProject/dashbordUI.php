
<?php
session_start();

if(isset($_SESSION["authUser"]) != true){
    header("Location: login_ui.php");
}

$name = $_SESSION["authUser"]["name"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">

    <title>Dashboard</title>
</head>
<body>
    <h1>Hello <?php echo $name ?> in News Dashboard</h1>

    <?php
   ?>

     <div class="nav-container">
    <a href="view_Category.php">View Category</a>
    <a href="view_news.php">View News</a>
    </div>
     <?php
   

    ?>
   <footer>
    <p>&copy; 2025 News Management. All rights reserved.</p>
</footer>
</body>
</html>