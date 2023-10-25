<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection" . $conn->connect_error);
}
?>