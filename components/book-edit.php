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
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<?php include "../components/dashboardnavbar.php"; ?>

<form action="../backend/book-edit.php" method="post">
    <div class="max-w-lg m-auto card card-bordered h-1/2 p-5 my-10 flex ">
        <h1 class="text-center text-3xl font-bold">Edit Booking</h1>
        <div class="card">
            <?php global $conn;
            include '../backend/connection.php';
            $id = $_GET["id"];
            $sql = "SELECT * FROM bookings where id = $id";

            if($result = mysqli_query($conn, $sql)){
                $hotel = mysqli_fetch_array($result);
                echo  '
            <div class="card-body flex flex-col">
               <label class="flex items-center gap-2">
                     Book ID
                    <input value="'.$hotel['id'].'" required  readonly name="id" class="input input-bordered w-full">
                </label>
               <label class="flex items-center gap-2">
                     Hotel ID
                    <input value="'.$hotel['booked_hotel'].'" required  readonly name="booked_hotel" class="input input-bordered w-full">
                </label>
                
                <label class="flex items-center gap-2">
                     Customer Name
                    <input value="'.$hotel['customer_name'].'" required  name="customer_name" class="input input-bordered w-full">
                </label>
                <label   class=" flex items-center gap-2">
                     Contact Number
                    <input type="tel" value="'.$hotel['contact_number'].'"  name="contact_number" required class="rounded-xl bg-amber-950/[.025%] input input-bordered border-black/10 w-full">
                </label>
                <label class=" flex items-center gap-2">
                          Select Room Type
                       <select required name="room_type" class="select select-bordered w-full h-4">
                        <option value="Standard Room" ' . (($hotel['room_type'] == 'Standard Room') ? 'selected' : '') . '>Standard Room</option>
                        <option value="Premium Room" ' . (($hotel['room_type'] == 'Premium Room') ? 'selected' : '') . '>Premium Room</option>
                        <option value="Deluxe Room" ' . (($hotel['room_type'] == 'Deluxe Room') ? 'selected' : '') . '>Deluxe Room</option>
                    </select>
                </label>
                 <label class=" flex items-center gap-2">
                     Date Arriving
                    <input value="'.$hotel['date_arriving'].'"  required name="date_arriving" type="datetime-local" class="input rounded-xl bg-amber-950/5 border-black/10 input-bordered w-full">
                </label>
                <label class=" flex items-center gap-2">
                     Date Departure
                    <input value="'.$hotel['date_departure'].'" required name="date_departure" type="datetime-local" class="input rounded-xl bg-amber-950/5 border-black/10 input-bordered w-full">
                </label>
           
                    
             
                <button type="submit" class="btn btn-accent">Update Booking</button>
            </div>
            ';
            }
            else{
                echo "Error: Unable to retrieve hotel information.";
            }
            ?>



        </div>
</form>
</body>