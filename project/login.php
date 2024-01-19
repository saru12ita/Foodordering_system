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
<style>
body {
    font-family: tahoma;
    background-color: #e9ebee;
    margin: 0;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

#login_bar {
    background-color: rgba(255, 255, 255, 0.8); /* Adjust the alpha (4th parameter) for transparency */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for a subtle depth effect */
}

label {
    font-size: 18px;
}

input[type="email"],
input[type="password"] {
    width: 85%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#button {
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

#button:hover {
    background-color: #45a049;
}

p {
    margin-top: 20px;
    font-size: 16px;
}

a {
    color: #3498db;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}




    </style>




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
            Login To Your Account<br><br>
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
