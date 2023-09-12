<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <form action="new_account.php" method="post" class = "form" style = "width : 50%">
            <div class="container">
                <div class="sets">
                    <div class="set1">
                        <p>First Name</p>
                        <input type="text" name="fname" id="fn" class = "in">
                        <p class = "fname" id = "check"></p>
                        <p>Last Name</p>
                        <input type="text" name="lname" id="ln" class = "in">
                        <p class = "lname" id = "check"></p>
                        <p>Gender</p>
                        <input type="radio" name="gen" id="gen" value = "M">Male
                        <input type="radio" name="gen" id="gen" value = "F">Female
                        <p class = "gen" id = "check"></p>
                        <p>Date Of Birth</p>
                        <input type="date" name="dob" id="dob" class = "in">
                        <p class = "dob" id = "check"></p>
                    </div>
                    <div class="line"></div>
                    <div class="set2">
                        <p>Mobile</p>
                        <input type="tel" name="mob" id="mob" class = "in">
                        <p class = "mob" id = "check"></p>
                        <p>Email</p>
                        <input type="email" name = "email" id = "em" class = "in">
                        <p class = "email" id = "check"></p>
                        <p>Password</p>
                        <input type="password" name="pass" id="pass" class = "in">
                        <p class = "pass" id = "check"></p>
                        <p>Confirm Password</p>
                        <input type="password" name="con" id="con" class = "in">
                        <p class = "con" id = "check"></p>
                    </div>
                </div>
                <div class="buttons">
                    <button type="submit" class = "sub">Signup</button>
                </div>
                <div class="new" style = "margin-top: 2%">
                    <a href="index.php" class = "red">Already have an account?</a>
                </div>
            </div>
        </form>
    </div>
    <script src="jquery.js"></script>
    <script src="signupscript.js"></script>
</body>
</html>