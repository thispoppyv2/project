<?php


global $conn;
include '../backend/connection.php';
$id = $_GET["id"];
$sql = "DELETE FROM bookings WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>alert('Hotel Deleted Successfully')</script>";
    header("Location: " . $_SERVER["HTTP_REFERER"]);
} else {
    echo "<script>alert('Hotel Not Deleted')</script>";
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
