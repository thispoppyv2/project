<?php

global $conn;
include '../backend/connection.php';

$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$role_id = 2;

$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

// Check if user already exists
$sql_check = "SELECT * FROM users WHERE email = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0){
    // User already exists, return null or handle as needed
    header("Location:../Pages/signup-existed.php");
    die();
}

// Insert new user if not found
$sql = "INSERT INTO users (email, fname, lname, password, role_id) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $email, $fname, $lname, $password, $role_id);

if ($stmt->execute()) {
    header("Location:../Pages/signup-success.php"); // Add new page for success message
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();