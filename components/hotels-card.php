
<div class="grid grid-cols-3 w-3/5 text-center items-center gap-2 m-auto mt-5 p-2.5">

<?php
global $conn;
include '../backend/connection.php';

// Check connection
if($conn == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM hotels";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<div class='card card-bordered w-full p-5 m-auto text-center'>";
            $id = $row['id'];
            echo  "<img class='rounded-2xl h-36 w-64 m-auto'  src=".$row['img_link'].">";
            echo "<div class='text-2xl font-bold'>" . $row['name'] . "</div>";
            echo "<div>" . $row['address'] . "</div>";
            echo "<div>" . $row['contact_number'] . "</div>";
            //gagawa kayo nung hotel-delete.php
            echo '<td>
                <div class="flex gap-2">
                <a class="btn btn-circle w-64 m-auto" href="hotel-add-book.php?id='.$row['id'].'">Book Now</a>
                  </div>
                </td>';

            //echo"<td> <a href ='updateview.php?userid=$id'>Edit</a>";
            //echo"<td> <a href ='delete.php?userid=$id'>Delete</a>";
            echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn); ?>

</div>
