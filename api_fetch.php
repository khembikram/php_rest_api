<?php

header("Content-Type : application/json");
header("Acess-Control-Allow-Origin: *");

include_once("connection.php");

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql) or die("Correct the query");

if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(array("error" => "No Record Found", "status" => false));
}

?>