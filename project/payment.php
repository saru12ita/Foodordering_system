<?php
session_start();
include("databaseindex.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $owner = $_POST['owner'];
    $password = $_POST['password'];
    $cardnumber = $_POST['cardnumber'];
    $payDate = $_POST['payDate'];
    $totalamount = $_POST['totalamount'];  // Corrected variable name

    // Use prepared statement to prevent SQL injection
    $query = "INSERT INTO payment (owner, password, cardnumber, payDate, amount) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        // Bind parameters to the statement
        mysqli_stmt_bind_param($stmt, 'ssssd', $owner, $password, $cardnumber, $payDate, $totalamount);

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
    <style>
        /* Add the following styles to your existing CSS code */
        .cards {
            display: flex;
            justify-content: space-between;
        }

        .cards img {
            max-width: 100%; /* Make images responsive */
            height: auto; /* Maintain aspect ratio */
            cursor: pointer; /* Add clickable cursor */
        }

        #submitButton {
            cursor: pointer;
            background-color: #3498db;
            color: #fff;
            padding: 2px 10px;
            border: none;
            border-radius: 3px;
            font-size: 14px;
            transition: background-color 0.3s ease-in-out;
        }

        #submitButton:hover {
            background-color: #2980b9;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Ordering System | Confirm Payment</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        function validateForm() {
            var owner = document.getElementById("Owner").value;
            var password = document.getElementById("Password").value;
            var cardnumber = document.getElementById("CardNumber").value;
            var payDate = document.getElementById("PayDate").value;
            var Totalamount = document.getElementById("Totalamount").value;

            // Owner validation: Any non-empty value
            if (owner.trim() === "") {
                alert("Please enter a valid Owner name.");
                return false;
            }

            // Password validation: Any non-empty value
            if (password.trim() === "") {
                alert("Please enter a valid Password.");
                return false;
            }

            // Card number validation: Numeric input with length 16
            var cardRegex = /^\d{16}$/;
            if (!cardnumber.match(cardRegex)) {
                alert("Please enter a valid 16-digit Card Number.");
                return false;
            }

            // Payment date validation: Should be a valid date (you may want to enhance this)
            var dateRegex = /^\d{4}-\d{2}-\d{2}$/; // Assuming YYYY-MM-DD format
            if (!payDate.match(dateRegex)) {
                alert("Please enter a valid Payment Date in YYYY-MM-DD format.");
                return false;
            }

            varTotalamountRegex = /^\d+(\.\d{1,2})?$/;  // Allows whole numbers or numbers with up to two decimal places
            if (!Totalamount.toString().match(TotalamountRegex)) {
                alert("Please enter a valid total amount.");
                return false;
            }

            return true; // Form will be submitted if all validations pass
        }
    </script>
</head>
<body>
    <section class="contact">
        <div class="container">
            <h1>Confirm Your Payment</h1>
            <div id="Register">
                <form method="POST" onsubmit="return validateForm()">
                    <br><br>
                    <div class="signup-text"></div>
                    <label for="Owner">First Name
                        <input type="text" id="Owner" placeholder="Owner name" name="owner"><br><br>
                    </label>

                    <label for="Password">Password
                        <input type="password" id="Password" placeholder="Password" name="password"><br><br>
                    </label>

                    <label for="CardNumber">Card Number
                        <input type="text" id="CardNumber" placeholder="Card Number" name="cardnumber"><br><br>
                    </label>

                    <label for="PayDate">Payment Date
                        <input type="text" id="PayDate" placeholder="YYYY-MM-DD" name="payDate">
                        <div class="date">
                            <br><br>
                        </div>
                    </label>
                    
                    <label for="TotalAmount">Total Amount
                        <input type="text" id="TotalAmount" placeholder="Total Amount" name="totalamount"><br><br>
                    </label>

                    <div class="cards">
                        <img src="mc.png" alt="">
                        <img src="vi.png" alt="">
                        <img src="pp.png" alt="">
                    </div>
                    <br><br>

                    <input type="submit" id="submitButton" value="Confirm"><br><br><br>
                </form>
            </div>
        </div>
    </section>
    <script src="form3.js"></script>
</body>
</html>
