<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

    include_once "dbcon.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if((!empty($_POST["email"])) && (!empty($_POST["pass"]))){
            $email = htmlspecialchars($_POST["email"]);
            $query = "Select * from login_system where email = '$email'";
            $result = mysqli_query($connection,$query);
            if(is_null($result)){
                echo "<script>
                alert('Email does not exist');
                history.back();
                </script>";
            }
            else{
                $data = mysqli_fetch_assoc($result);
                $crtpass = $data['password'];
                $password = $_POST["pass"];
                if($crtpass == $password){
                    echo "<script>alert('Welcome')</script>";
                    $name = $data['name'];
                    $gen = $data['gender'];
                    $gen = ($gen == 'M') ? "Male" : "Female";
                    $dob = $data['dob'];
                    $mob = $data['mobile'];
                }
                else{
                    echo "<script>
                    alert('Wrong password');
                    history.back();
                    </script>";
                }
            }
        }
        else{
            header("location:javascript://history.go(-1)");
        }
    }
?>

    <div class="log">
        <div class="heading">
            <h1 class = "head">Welcome <?php echo $name ?></h1>
        </div>
        <div class="body">
            <h3>You are a <?php echo $gen ?></h3>
            <h3>You were born on <?php echo $dob ?></h3>
            <h3>Your rmobile number is <?php echo $mob ?></h3>
        </div>
        <div class="ending">
            <h2>Thank you for logging in</h2>
        </div>
        <div class="button">
            <button class = "but" onclick = "history.back()">Log out</button>
        </div>
    </div>


</body>
</html>
