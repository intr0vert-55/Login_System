<?php

include_once "dbcon.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if((!empty($_POST["fname"])) && (!empty($_POST["lname"])) && (!empty($_POST["gen"])) && (!empty($_POST["dob"]))
    && (!empty($_POST["mob"])) && (!empty($_POST["email"])) && (!empty($_POST["pass"])) && ($_POST["pass"] == $_POST["con"])){
        $email = htmlspecialchars($_POST["email"]);
        // echo $email;
        $query = "Select email from login_system where email = '$email'";
        // echo $query;
        $result = mysqli_query($connection, $query);
        if(mysqli_num_rows($result) == 0){
            $name = htmlspecialchars($_POST["fname"])." ".htmlspecialchars($_POST["lname"]);
            $gender = $_POST["gen"];
            $dob = $_POST["dob"];
            $mob = htmlspecialchars($_POST["mob"]);
            $pass = htmlspecialchars($_POST["pass"]);
            $query = "Insert into login_system values('$name','$email','$gender','$dob','$mob','$pass')";
            mysqli_query($connection, $query);
            echo "<script>
                alert('Account created successfully');
                location.href = 'index.php';
                </script>";
        }
        else{
            echo "<script>
                alert('Email already exist');
                history.back();
                </script>";
        }
    }
    else{
        header("location:javascript://history.go(-1)");
    }
}