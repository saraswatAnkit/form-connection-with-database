<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];
        $password = $_POST['pass'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "select * from form where email = '$email' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pass'] == $password)
                    {
                        header("location: index.php");
                        die;
                    }
                }
            }
            echo "<script type=\"text/javascript\"> alert('Wrong Username or Password')</script>";
        }
        else{
            echo "<script type=\"text/javascript\"> alert('Wrong Username or Password')</script>";

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Form and Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login">
    
    <div class="container2">
        <h1 class="heading">Log In</h1>
        <h3 class="subheading">It's free and only takes a minute</h3>
        <form action="" method="POST">
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>Not have an account? <a href="signup.php">Sign Up Here</a></p>
    </div>

</body>
</html>