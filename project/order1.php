<?php
session_start();
include("database2.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fullname = $_POST['fullname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Use prepared statement to prevent SQL injection
    $query = "INSERT INTO orders (fullname, phonenumber, email, address) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        // Bind parameters to the statement
        mysqli_stmt_bind_param($stmt, 'ssss', $fullname, $phonenumber, $email, $address);

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Online Food Ordering System</title>

    <style>
     body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #9b84a6;
            color: #1a04dc;
        }

        /* Navbar Section */
        .navbar {
            background-color: #343a40;
            color: #101496;
            padding: 15px 0;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            display: inline-block;
        }

        .navbar a:hover {
            background-color: #5a6268;
        }

        /* fOOD sEARCH Section */
        .food-search {
            background-image: url('background-image.jpg'); /* Replace 'background-image.jpg' with your actual image */
            background-size: cover;
            background-position: center;
            padding: 50px 0;
            color: #0ca34b;
        }

        .food-search h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .order {
            background-color: rgba(196, 6, 117, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .order legend {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .food-menu-img img {
            width: 100%;
            border-radius: 10px;
        }

        .food-menu-desc {
            margin-top: 20px;
        }

        /* Social Section */
        .social {
            background-color: #dadddf;
            padding: 20px 0;
        }

        .social img {
            width: 40px;
            height: 40px;
            margin: 0 10px;
        }

        /* Footer Section */
        .footer {
            background-color: #343a40;
            color: #d7d7e0;
            padding: 10px 0;
        }

        .footer a {
            color: #4569b7;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .clearfix::after {
            content: '';
            display: table;
            clear: both;
        }
    </style>

    <script>
        function validateForm() {
            var fullName = document.getElementById("FullName").value;
            var phoneNumber = document.getElementById("PhoneNumber").value;
            var email = document.getElementById("Email").value;
            var address = document.getElementById("Address").value;

            // Full Name validation: Any non-empty value
            if (fullName.trim() === "") {
                alert("Please enter a valid Full Name.");
                return false;
            }

            // Phone Number validation: Only digits, optional '+' at the beginning
            var phoneRegex = /^[+]?[\d]+$/;
            if (!phoneNumber.match(phoneRegex)) {
                alert("Please enter a valid Phone Number.");
                return false;
            }

            // Email validation: Basic email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.match(emailRegex)) {
                alert("Please enter a valid Email address.");
                return false;
            }

            // Address validation: Any non-empty value
            if (address.trim() === "") {
                alert("Please enter a valid Address.");
                return false;
            }

            return true;
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

    <label for="Fullname">Fullname
        <input type="text" id="FullName" placeholder="Fullname" name="fullname"><br><br>
    </label>

    <label for="PhoneNumber">PhoneNumber
        <input type="text" id="PhoneNumber" placeholder="PhoneNumber" name="phonenumber"><br><br>
    </label>

    <label for="Email">Email
        <input type="email" id="Email" placeholder="Email" name="email"><br><br>
    </label>

    <label for="Address">Address
        <input type="text" id="Address" placeholder="Address" name="address"><br><br>
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
