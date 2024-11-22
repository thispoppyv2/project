<?php
$conn = mysqli_connect("localhost","root","","projectdb_final");

if($conn==false){
    die("Error: " . mysqli_connect_error());
}
?>