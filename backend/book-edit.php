<?php

include 'connection.php';
$id = $_POST['id'];
$customer_name = $_POST['customer_name'];
$date_arriving = $_POST['date_arriving'];
$date_departure = $_POST['date_departure'];
$room_type = $_POST['room_type'];
$booked_hotel = $_POST['booked_hotel'];
$contact_number = $_POST['contact_number'];




$sql = "UPDATE bookings SET customer_name = '$customer_name', date_arriving = '$date_arriving',date_departure='$date_departure', room_type='$room_type', booked_hotel='$booked_hotel', contact_number='$contact_number' WHERE id='$id'";


if(mysqli_query($conn, $sql)){
    header("Location:/project/components/hotel-view.php?id=$booked_hotel");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>
