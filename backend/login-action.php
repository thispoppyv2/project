<?php
session_start();
include "../backend/connection.php";
global $conn;

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email) || empty($password)) {
        header("Location: ./login.php?error=Email and Password are required");
        exit();
    } else {
        // Use prepared statement to prevent SQL injection
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            // Verify password using password_verify (assumes password is hashed using password_hash during registration)
            if (password_verify($password, $row['password'])) {
                header("Location: ../dashboard.php");
                exit();
                // Check UserType to redirect accordingly

            } else {
                header("Location: ../Pages/login.php?error=Incorrect Email or Password");
                exit();
            }
        } else {
            header("Location: ../Pages/login.php?error=No Results Found");
            exit();
        }
    }
} else {
    header("Location: ../pages/login.php");
    exit();
}
