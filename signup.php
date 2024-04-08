<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $Gender = $_POST['gender'];
        $num = $_POST['cnum'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "INSERT INTO form (fname, lname, gender, cnum, address, email, pass) VALUES ('$firstname', '$lastname', '$Gender', '$num', '$address', '$email', '$password')";

            mysqli_query($con, $query);

            echo "<script type=\"text/javascript\"> alert('Successfully Register')</script>";
        }
        else
        {
            echo "<script type=\"text/javascript\"> alert('Please Enter some Valid Information')</script>";
        }

    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container">
    <h1 class="heading">Sign Up</h1>
    <h3 class="subheading">It's free and only takes a minute</h3>
    <form action="" method="post">
        <label>First Name</label>
        <input type="text" name="fname" required>
        <label>Last Name</label>
        <input type="text" name="lname" required>
        <label>Gender</label>
        <input type="text" name="gender" required>
        <label>Contact Address</label>
        <input type="tel" name="cnum" required>
        <label>Address</label>
        <input type="text" name="address" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Password</label>
        <input type="password" name="pass" required>
        <input type="submit" name="" value="Submit">
    </form>
    <p>By clicking on sign-up button, you agree to our <br>
    <a href="">Terms and Condition</a> and <a href="">Policy Privacy
    </a></p>
    <p>Already have an account? <a href="login.php">Login Here</a></p>
</div>

</body>
</html>