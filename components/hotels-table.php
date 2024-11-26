    <?php
global $conn;
include './backend/connection.php';

// Check connection
if($conn == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM hotels";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>Hotel ID</th>";
        echo "<th>Name</th>";
        echo "<th>Address</th>";
        echo "<th>Contact Number</th>";
        echo "<th>Actions</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            $id = $row['id'];
            echo "<td class='flex flex-row items-center gap-2'>" . $row['id'] . "<img class='rounded-2xl h-9 w-16'  src=".$row['img_link']."> </td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['contact_number'] . "</td>";
            //gagawa kayo nung hotel-delete.php
            echo '<td>
                <div class="flex gap-2">
                <a class="btn btn-circle" href="backend/hotel-delete.php?id='.$row['id'].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/></svg></a>
                <a class="btn btn-circle" href="components/hotel-edit-page.php?id='.$row['id'].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil"><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"/><path d="m15 5 4 4"/></svg></a>
                <a class="btn btn-circle" href="components/hotel-view.php?id='.$row['id'].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ellipsis"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg></a>
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
        echo "No records were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
