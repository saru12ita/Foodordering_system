<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "foodweb";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM payment";

?>

<table border=1>
    <tr>
        <th>Owner</th><th>Password</th><th>Card Number</th><th>Pay Date</th><th>Amount</th>
    </tr>
    <?php
    if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) {
            
            $owner = $row["owner"];
            $password = $row["password"];
            $cardNumber = $row["cardnumber"];
            $payDate = $row["payDate"];
            $amount = $row["amount"];
            echo  '</td><td>' . $owner . '</td><td>' . $password . '</td><td>' . $cardNumber . '</td><td>' . $payDate . '</td><td>' . $amount . '</tr>';
        }
        $result->free();
    }
    ?>
</table>
