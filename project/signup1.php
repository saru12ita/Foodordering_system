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
        /* CSS for Contact Form */

body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    margin: 0;
}

.container {
    width: 80%;
    margin: 0 auto;
}

.navbar {
    background-color: #333;
    padding: 10px 0;
    color: white;
}

.logo img {
    max-width: 100%;
    height: auto;
}

.menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.menu ul li {
    display: inline-block;
    margin-right: 20px;
}

.menu a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}

.menu a:hover {
    color: #ff4757;
}

.contact {
    background-color: #f5f5f5;
    padding: 4% 0;
}

.contact h2 {
    color: #333;
    text-align: center;
}

.contact-form {
    width: 50%;
    margin: 0 auto;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.contact-form label {
    display: block;
    margin-bottom: 1%;
    font-weight: bold;
    color: #555;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 3%;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.contact-form button {
    padding: 10px;
    background-color: #ff6b81;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

.contact-form button:hover {
    background-color: #ff4757;
}

.response-message {
    margin-top: 1%;
    padding: 10px;
    border-radius: 5px;
    display: none;
}

.success {
    background-color: #4caf50;
    color: white;
}

.error {
    background-color: #f44336;
    color: white;
}

.social ul {
    list-style: none;
    padding: 0;
}

.social ul li {
    display: inline-block;
    margin-right: 10px;
}

.social a img {
    max-width: 40px;
    height: auto;
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
            <h2 class="text-center">Contact Us</h2>

            <div id="Register">
            <form method="POST" onsubmit="return validateForm()">
    Signup Form<br><br>

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
