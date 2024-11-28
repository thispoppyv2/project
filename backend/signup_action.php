<?php

global $conn;
include '../backend/connection.php';

$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$role_id = 2;

$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

$sql = "INSERT INTO users (email, fname, lname, password, role_id) VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssss", $email, $fname, $lname, $password, $role_id);

if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>





