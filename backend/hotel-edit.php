<?php

global $conn;
include '../backend/connection.php';

$id = $_GET['id'];
if ($conn == false){
    die ("Connection failed: " . mysqli_connect_error());
}

$SQL = "SELECT * FROM hotel WHERE id = '$id'";

    if ($result = mysqli_query($conn, $SQL)) {
        $row = mysqli_fetch_assoc($result);
            $hotel_name = $row['hotel_name'];
            $hotel_address = $row['hotel_address'];
            $hotel_phone = $row['hotel_phone'];
    }
    else{
        echo "Error: Could not able to execute sql." . mysqli_error($conn);
    }

    //mysql close link
    mysqli_close($conn);