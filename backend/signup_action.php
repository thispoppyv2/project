<?php


include '../backend/connection.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = MD5($_POST["password"]);


$sql = "INSERT INTO users SET email='$email', fname='$fname', lname='$lname', password='$password'";



if(mysqli_query($conn, $sql)){
    header("Location:/project/pages/signup-success.php");


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>





