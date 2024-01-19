<?php
session_start();
include("database1.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];  // Correct variable name
    $password = $_POST['password'];

    if (!empty($email ) && !empty($password) && !is_numeric($email )) {
        $query = "SELECT * FROM signup WHERE email='$email ' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data['password'] == $password) {
                header("location: home.php");
                die;
            }
        }

        echo "<script type='text/javascript'>alert('Wrong username or password')</script>";
    } else {
        echo "<script type='text/javascript'>alert('Please enter valid information')</script>";
    }



}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Food Ordering system | log in</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Online Food Ordering System</title>
</head>
<body style="font-family: tahoma; background-color: #e9ebee;">
    <form method="POST">
        <div id="bar">
            <div style="font-size: 40px;"></div>
        </div>
        <div id="login_bar">
            Log in to Online Food Ordering system<br><br>
            <label>Email</label>
            <input type="email" id="text" placeholder="Email" name="email"><br><br>
            <label>Password</label>
            <input type="password" id="text" placeholder="Password" name="password"><br><br>
            <input type="submit" id="button" value="Log in">
            <br><br><br>
            <p>Don't have an account? <a href="signup.php">Sign up Here</a></p>
        </div>
    </form>
</body>
</html>
