<?php
// Establishing a connection to the MySQL database
$con = mysqli_connect("localhost", "root", "", "webfood") or die(mysqli_error($con));
function InsertLocation($firstname, $lastname, $gender, $email, $password) {
    global $conn; // Access the global database connection variable

    $sql = "INSERT INTO signup(firstname, lastname, gender, email, password) 
    VALUES ('$firstname', '$lastname', '$gender', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Location inserted successfully";
    } else {
        echo "Error inserting location: " . $conn->error;
    }
}

