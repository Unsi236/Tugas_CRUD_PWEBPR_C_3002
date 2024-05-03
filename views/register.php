<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dulu Dekk!</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="box">
        <span class="borderline"></span>
        <form id="form" action="login.php" method="post" class="form">
            <h2>Sign Up</h2>
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
            <div class="inputbox">
                <input type="password" required>
                <span>Konfirm Password</span>
                <i></i>
            </div>
            <div class="links">
                <!-- <a href= "#">Forgot Password</a> -->
                <a href= "login.php">Sign In</a>
            </div>
            <input type="submit" value="Daftar">
        </form>
    </div>
</body>
</html>