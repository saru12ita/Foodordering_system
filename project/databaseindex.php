<?php
// Establishing a connection to the MySQL database
$con = mysqli_connect("localhost", "root", "", "webfood") or die(mysqli_error($con));

function InsertLocation($owner, $password, $cardnumber, $payDate, $Totalamount) {
    global $con; // Access the global database connection variable

    // Use prepared statement to prevent SQL injection
    $query = "INSERT INTO payment  (owner, password, cardnumber, payDate, Totalamount) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        // Bind parameters to the statement
        mysqli_stmt_bind_param($stmt, 'ssssd', $owner, $password, $cardnumber, $payDate, $Totalamount);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Location inserted successfully";
        } else {
            echo "Error inserting location: " . mysqli_stmt_error($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error in preparing the statement: " . mysqli_error($con);
    }
}
?>
