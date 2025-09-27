
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link rel="stylesheet" href="addCategory.css">
</head>
<body>
    <form action="addCategory_logic.php" method="post">
        <h1>Add Categories You Want To Show!</h1>
        <input type="text" name="new_category_name" placeholder="Name">

        <select name="new_category_kind" required>
            <option value="">Select Kind</option>
            <option value="Sport">Sport</option>
            <option value="Policy">Policy</option>
            <option value="Economical">Economical</option>
            <option value="Other">Other</option>
        </select>


        <input type="submit" value="Add" name="add">

    </form>
    
</body>
</html>
