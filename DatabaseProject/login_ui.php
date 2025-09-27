
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
   
</head>
<body>
    <h1 id="title">Fast News, Fast Service, Fast Delivery</h1>
    <div class="form-container">
    <h2>Welcome Back! </h2>

    <form action="login_logic.php" method="post">
        
        <input type="email" name="Email" placeholder="email">
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        
        <div style="margin: 15px 0;">
            
        </div>
        
        <input type="submit" value="login" name="login">
    </form>
    <div class="create-account">
            <p>Don't have an account?</p>
            <a href="createAcc_ui.php" class="create-btn">Create Account</a>
        </div>
</div>

<footer>
    <p>&copy; 2025 News Management. All rights reserved.</p>
</footer>

</body> 
</html>