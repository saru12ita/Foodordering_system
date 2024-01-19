<?php
// Establishing a connection to the MySQL database
$con = mysqli_connect("localhost", "root", "", "foodorder") or die(mysqli_error($con));
function InsertLocation($id,$name,$email,$password,$phone) {
    global $conn; // Access the global database connection variable

    $sql = "INSERT INTO info(id,name,email,password,phone) 
    VALUES ('$id', '$name','$email','$password','$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Location inserted successfully";
    } else {
        echo "Error inserting location: " . $conn->error;
    }
}

