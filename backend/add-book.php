<?php


global $conn;
include '../backend/connection.php';
$customer_number = $_POST["customer_number"];
$customer_name = $_POST ["customer_name"];
$date_arriving = $_POST ["date_arriving"];
$date_departure = $_POST ["date_departure"];
$room_type = $_POST ["room_type"];

$sql = "INSERT INTO bookings SET customer_number='$customer_number',customer_name='$customer_name', date_arriving='$date_arriving', date_departure='$date_departure', room_type='$room_type'";


if (mysqli_query($conn, $sql)) {
    header("Location:/pages/book-success.php"); //add new page ganon para makita na nabook na


} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);







