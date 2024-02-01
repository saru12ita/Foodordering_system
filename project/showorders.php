<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "foodweb";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM orders";

?>

<table border=1>
    <tr>
        <th>Full Name</th><th>Phone Number</th><th>Email</th><th>Address</th>
    </tr>
    <?php
    if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) {
            
            $fullName = $row["fullname"];
            $phoneNumber = $row["phonenumber"];
            $email = $row["email"];
            $address = $row["address"];
           
            echo  '</td><td>' . $fullName . '</td><td>' . $phoneNumber . '</td><td>' . $email . '</td><td>' . $address . '</tr>';
        }
        $result->free();
    }
    ?>
</table>
