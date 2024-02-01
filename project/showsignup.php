<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "foodweb";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM signup";

?>
<table border=1>
    <tr>
        <th>First Name</th><th>Last Name</th><th>Gender</th><th>Email</th><th>Password</th>
    </tr>
    <?php
    if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) {
            
            $firstName = $row["firstname"];
            $lastName = $row["lastname"];
            $gender = $row["gender"];
            $email = $row["email"];
            $password = $row["password"];
            echo  '</td><td>' . $firstName . '</td><td>' . $lastName . '</td><td>' . $gender . '</td><td>' . $email . '</td><td>' . $password . '</tr>';
        }
        $result->free();
    }
    ?>
</table>
