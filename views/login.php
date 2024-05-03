<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dulu Dek!!</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="box">
        <span class="borderline"></span>
        <form id="form" action="ElektronikApp.php" method="post" class="form">
            <h2>Sign In</h2>
            <div class="inputbox">
                <input type="text" required>
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" required>
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href= "#">Forgot Password</a>
                <a href= "register.php">Sign Up</a>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>