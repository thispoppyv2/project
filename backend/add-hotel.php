<?php


include '../backend/connection.php';

$name = $_POST["name"];
$address = $_POST["address"];
$contact_number = $_POST["contact_number"];
$img_link= $_POST["img_link"];



$sql = "INSERT INTO hotels SET name='$name', address='$address', contact_number='$contact_number', img_link='$img_link'";



if(mysqli_query($conn, $sql)){
    header("Location:/project/management.php");


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>





