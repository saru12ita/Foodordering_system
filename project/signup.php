<?php
session_start();
include("database1.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];  // Correct variable name
    $password = $_POST['password'];

    // Use prepared statement to prevent SQL injection
    $query = "INSERT INTO signup (firstname, lastname, gender, email, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        // Bind parameters to the statement
        mysqli_stmt_bind_param($stmt, 'sssss', $firstname, $lastname, $gender, $email, $password);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "<script type='text/javascript'>alert('Successfully Registered')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Error: " . mysqli_stmt_error($stmt) . "')</script>";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "<script type='text/javascript'>alert('Error in preparing the statement: " . mysqli_error($con) . "')</script>";
    }
}
?>


<!DOCTYPE html>
<html>
    <head><title>online food ordering  system | signup</title></head>
    <head>
    <link rel="stylesheet" href="style.css">
    <style>
       /* General Styles */

       body {
    font-family: Arial, sans-serif;
    background-image: url('anion.jpg');
    background-size: cover;
    background-position: center;
    margin: 0;
    padding: 0;
    position: relative; /* Ensure that the ::before pseudo-element is positioned relative to the body */
}

body::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Adjust the last value (0.5) for the desired level of transparency */
}

.container {
    width: 60%;
    margin: 0 auto;
    position: relative; /* Ensure that the container is positioned relative to the body */
    z-index: 1; /* Ensure that the container appears above the pseudo-element */
}

/* Rest of your existing styles... */


.container {
    width: 60%;
    margin: 0 auto;
}


h2.text-center {
            color: orange; /* Set the color to yellow */
            font-weight: bold; /* Make it bold */
            font-size: 24px; /* Adjust the font size */
            font-family: 'Arial', sans-serif; /* Specify the font family */
            cursor: pointer;
        }













/*
form {
    background-color: #ffffff;
    max-width: 400px;
    margin: 35px auto;
    padding: 20px;
    box-shadow: 0 0 20px rgba(0.75, 1, 0, 0.75);
    border-radius: 4px;
}
*/
.signup-text {
            color:purple ;
            text-align: center;
            font-size: 27px;
            font-family: 'Times New Roman', Times, serif;
            margin-top: -55px; /* Adjust this value to vertically center the text */
        }



form {
    background-color: #ffffff;
    max-width: 300px; /* Adjust the max-width to your preference */
    margin: 35px auto;
    padding: 14px;
    box-shadow: 0 0 20px rgba(0.75, 1, 0, 0.75);
    border-radius: 4px;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

#submitButton {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#submitButton:hover {
    background-color:purple;
}

.social {
    background-color: #232323;
    color: #fff;
    padding: 20px 0;
    margin: 0px;
}

ul {
    list-style: none;
    padding: 0;
}

ul li {
    display: inline-block;
    margin-right: 10px;
}

a {
    text-decoration: none;
}

a img {
    width: 25px;
    height: 25px;
}
.text-center {
    text-align: center;
}







    </style>

<script>
       function validateForm() {
    var firstname = document.getElementById("FirstName").value;
    var lastname = document.getElementById("LastName").value;
    var gender = document.getElementById("Gender").value;
    var email = document.getElementById("Email").value;
    var password = document.getElementById("Password").value;

    // Firstname validation: Any non-empty value
    if (firstname.trim() === "") {
        alert("Please enter a valid Firstname.");
        return false;
    }

    // Lastname validation: Any non-empty value
    if (lastname.trim() === "") {
        alert("Please enter a valid Lastname.");
        return false;
    }

    // Gender validation: Any non-empty value
    if (gender.trim() === "") {
        alert("Please enter a valid Gender.");
        return false;
    }

    // Email validation: Basic email format
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.match(emailRegex)) {
        alert("Please enter a valid Email address.");
        return false;
    }

    // Password validation: Minimum eight characters
    if (password.length < 8) {
        alert("Password should be at least 8 characters long.");
        return false;
    }

    return true; // Form will be submitted if all validations pass
}
</script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Online Food Ordering System</title>
    </head>
    <body>
    
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>

           
            <div class="clearfix"></div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <h2 class="text-center">Register</h2>

            <div id="Register">
            <form method="POST" onsubmit="return validateForm()">
    <br><br>
    <div class="signup-text">Signup</div>
    <label for="FirstName">Firstname
    <input type="text" id="FirstName" placeholder="Firstname" name="firstname"><br><br>
</label>

<label for="LastName">Lastname
    <input type="text" id="LastName" placeholder="Lastname" name="lastname"><br><br>
</label>

<label for="Gender">Gender
    <input type="text" id="Gender" placeholder="Gender" name="gender"><br><br>
</label>

<label for="Email">Email
    <input type="email" id="Email" placeholder="Email" name="email"><br><br>
</label>

<label for="Password">Password
    <input type="password" id="Password" placeholder="Password" name="password"><br><br>
</label>

<input type="submit" id="submitButton" value="Submit" onclick="return validateForm()"><br><br><br>

</form>

    <script src="form3.js"></script>
</div>

    <section class="social">
    <div class="container text-center">
        <ul>
            <li>
                <a href="https://www.facebook.com/" target="_blank"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" alt="Facebook"/></a>
            </li>
            <li>
                <a href="https://www.instagram.com/" target="_blank"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" alt="Instagram"/></a>
            </li>
            <li>
                <a href="https://twitter.com/" target="_blank"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" alt="Twitter"/></a>
            </li>
        </ul>
    </div>
</section>
    </body>
</html>
