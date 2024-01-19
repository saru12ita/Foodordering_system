<?php
session_start();
include("database2.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];  // Correct variable name
    $phone = $_POST['phone'];

    // Use prepared statement to prevent SQL injection
    $query = "INSERT INTO info (id, name, email, password, phone) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        // Bind parameters to the statement
        mysqli_stmt_bind_param($stmt, 'sssss', $id, $name, $email, $password, $phone);

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
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 60%;
    margin: 0 auto;
}

form {
    background-color: #ffffff;
    max-width: 400px;
    margin: 35px auto;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0.1, 1, 0, 0.1);
    border-radius: 4px;
}

label {
    display: block;
    margin-bottom: 10px;
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
    background-color: 333;
}

.social {
    background-color: #232323;
    color: #fff;
    padding: 20px 0;
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

#Register h2 {
    
    color: blue;
}

.text-center h2 {
    
    color: blue;
}




  
    </style>

<script>
        function validateForm() {
            var id = document.getElementById("UserId").value;
            var name = document.getElementById("FirstName").value;
            var email = document.getElementById("Email").value;
            var password = document.getElementById("password").value;
            var phone = document.getElementById("phone").value;

            // ID validation: Any non-empty value
            if (id.trim() === "") {
                alert("Please enter a valid ID.");
                return false;
            }

            // Name validation: Any non-empty value
            if (name.trim() === "") {
                alert("Please enter a valid Name.");
                return false;
            }

            // Email validation: Basic email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.match(emailRegex)) {
                alert("Please enter a valid Email address.");
                return false;
            }

            if (password.length < 8) {
            alert("Password should be at least 8 characters long.");
            return false;
        }

        // Phone validation: Check if it's a valid number
        if (isNaN(phone) || phone === "") {
            alert("Please enter a valid phone number.");
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

            <div id="ContactDetails">
            <form method="POST" onsubmit="return validateForm()">
    <br><br>

    <label for="UserId">ID
        <input type="text" id="UserId" placeholder="ID" name="id"><br><br>
    </label>

    <label for="FirstName">Name
        <input type="text" id="FirstName" placeholder="Name" name="name"><br><br>
    </label>
    <label for="Email">Email
        <input type="email" id="Email" placeholder="Email" name="email"><br><br>
    </label>

    <label for="password">Password
    <input type="password" id="password" placeholder="Enter password" name="password"><br><br>
</label>

<label for="phone">Phone
    <input type="text" id="phone" placeholder="Enter phone (e.g., 9826645490)" name="phone"><br><br>
</label>

    <input type="submit" id="submitButton" value="Submit"><br><br><br>
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
