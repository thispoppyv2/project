<?php


global $conn;
include '../backend/connection.php';


$customer_name = $_POST ["customer_name"];
$customer_number = $_POST ["customer_number"];
$date_arriving = $_POST ["data_arriving"];
$date_departure = $_POST ["date_departure"];
$room_type = $_POST ["room_type"];

$sql = "INSERT INTO bookings SET customer_name='$customer_name', customer_number='$customer_number', date_arriving='$date_arriving', date_departure='$date_departure', room_type='$room_type'";


if (mysqli_query($conn, $sql)) {
    header("Location:/pages/book.php"); //add new page ganon para makita na nabook na


} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);







