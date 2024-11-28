<?php $id = $_GET["id"];?>
<!doctype html>
<html data-theme="autumn" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script>
        tailwind.config = {
            daisyui: {
                themes: ["cupcake"],
            },
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d'z
                    }
                }
            },
            plugins: [require("@tailwindcss/typography"), require("daisyui")],
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<?php include "../components/dashboardnavbar.php"; ?>

<div class="grid w-3/5 m-auto gap-5 ">
    <div class="card card-bordered mt-5 border-2 border-black/25 ">


        <?php




global $conn;
include '../backend/connection.php';

// Check connection
if($conn == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM bookings where booked_hotel = $id";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){

        echo "<table class='table m-auto'>";
        echo "<tr>";
        echo "<th>Book ID</th>";
        echo "<th>Customer Name</th>";
        echo "<th>Contact Number</th>";
        echo "<th>Arrival Date</th>";
        echo "<th>Departure Date</th>";
        echo "<th>Room</th>";
        echo "<th></th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            $id = $row['id'];
            echo "<td class='flex flex-row items-center gap-2'>" . $row['id'] ."</td>";
            echo "<td>" . $row['customer_name'] . "</td>";
            echo "<td>" . $row['contact_number'] . "</td>";
            echo "<td>" . $row['date_arriving'] . "</td>";
            echo "<td>" . $row['date_departure'] . "</td>";
            echo "<td>" . $row['room_type'] . "</td>";
            //gagawa kayo nung hotel-delete.php
            echo '<td>
                <div class="flex gap-2">
                <a class="btn btn-circle" href="../backend/book-delete.php?id='.$row['id'].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/></svg></a>
                <a class="btn btn-circle" href="book-edit.php?id='.$row['id'].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil"><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"/><path d="m15 5 4 4"/></svg></a>
                </div>
</td>';

            //echo"<td> <a href ='updateview.php?userid=$id'>Edit</a>";
            //echo"<td> <a href ='delete.php?userid=$id'>Delete</a>";
            echo "</tr>";
        }
        echo "</table>";

        // Free result set
        mysqli_free_result($result);
    } else{
        echo "<div class='p-5 text-center'>No records were found.</div>";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn); ?>

    </div>
   <?php
   echo ' <div class="">
        <a href="../Pages/hotel-add-book-dashboard.php?id='.$_GET["id"].'" class="place-self-end flex btn btn-primary my-5">Add Booking</a>
    </div>'
   ?>
</div>


</body>
</html>





