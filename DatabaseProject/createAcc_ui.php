
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="createAcc.css">
    <title>Create Account</title>
   
</head>
<body>
    <div class="form-container">
    <h1>Hello on News Website</h1>

    <form action="createAcc_logic.php" method="post">
        <input type="text" name="Username" placeholder="name">
        <br>
        <input type="email" name="Email" placeholder="email">
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        
        <div style="margin: 15px 0;">
            
            <input type="radio" name="gender" value="Male" id="male">
            <label for="male">Male</label>

            <input type="radio" name="gender" value="Female" id="female">
            <label for="female">Female</label>
        </div>
        
        <input type="submit" value="Create" name="create_Account">
    </form>
    <div class="have-account">
            <p>Have an account?</p>
            <a href="login_ui.php" class="account-btn">Go to your Account</a>
        </div>
</div>

<footer>
    <p>&copy; 2025 News Management. All rights reserved.</p>
</footer>

</body>
</html>