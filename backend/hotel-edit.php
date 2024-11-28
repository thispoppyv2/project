<?php

include 'connection.php';
$id = $_POST["id"];
$name = $_POST["name"];
$address = $_POST["address"];
$contact_number = $_POST["contact_number"];
$img_link = $_POST["img_link"];




$sql = "UPDATE hotels SET name='$name', address='$address', contact_number='$contact_number', img_link='$img_link' WHERE id='$id'";


if(mysqli_query($conn, $sql)){
    header("Location: ../management.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>
