<?php
$servername = "localhost";
$username = "martandb";
$password = "Heslo123.";
$dbname = "northwindmysql"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Spojenie zlyhalo: " . $conn->connect_error);
}
?>
