<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <form action="login.php" method="post" class = "form" style = "width : 20%">
            <p class = "head">Email</p>
            <input type="email" name="email" id="em" class = "in">
            <p class = "email" id = "check"></p>
            <p class = "head">Password</p>
            <input type="password" name="pass" id="pa" class = "in">
            <p class = "password" id = "check"></p>
            <div class = "new"><p class = "fp">Forgot password?</p></div>
            <div class="buttons">
                <button type="submit" class = "sub">Login</button>
            </div>
            <div class="new" style = "margin-top: 7.5%">
                <a href="signup.php" class = "red">New User?</a>
            </div>
        </form>
    </div>
    <script src="jquery.js"></script>
    <script src="loginscript.js"></script>
</body>
</html>