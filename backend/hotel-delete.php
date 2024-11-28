<?php


global $conn;
include '../backend/connection.php';
$id = $_GET["id"];
$sql = "DELETE FROM hotels WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>alert('Hotel Deleted Successfully')</script>";
    header("Location:/project/management.php");
} else {
    echo "<script>alert('Hotel Not Deleted')</script>";
    header("Location:/project/management.php");
}
