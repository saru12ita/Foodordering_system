<?php
// Establishing a connection to the MySQL database
$con = mysqli_connect("localhost", "root", "", "foodorder") or die(mysqli_error($con));
function InsertLocation($fullname, $phonenumber, $email, $address) {
    global $conn; // Access the global database connection variable

    $sql = "INSERT INTO orders(fullname, phonenumber, email, address) 
    VALUES (' $fullname',' $phonenumber',' $email', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Location inserted successfully";
    } else {
        echo "Error inserting location: " . $conn->error;
    }
}

