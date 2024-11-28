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
                        clifford: '#da373d'
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


<form action="../backend/hotel-edit.php" method="post">
    <div class="max-w-lg m-auto card card-bordered h-1/2 p-5 my-10 flex ">
        <h1 class="text-center text-3xl font-bold">Edit Hotel</h1>
        <div class="card">
            <?php global $conn;
            include '../backend/connection.php';
            $id = $_GET["id"];
            $sql = "SELECT * FROM hotels where id = $id";

            if($result = mysqli_query($conn, $sql)){
                $hotel = mysqli_fetch_array($result);
                echo  '
            <div class="card-body">
               <img class="rounded-2xl" src="'.$hotel['img_link'].'"/>
               <label class="input input-bordered flex items-center gap-2">
                     Room Number
                <input value="'.$hotel['name'].'" name="name" class="input w-full">
               </label>
                 <label class="input input-bordered flex items-center gap-2">
                     Room Type
                <input value="'.$hotel['address'].'" name="address" class="input w-full">
               </label>
                <label class="input input-bordered flex items-center gap-2">
                     Max Capacity
                <input value="'.$hotel['contact_number'].'" name="contact_number" class="input w-full">
               </label>
               <label class="input input-bordered flex items-center gap-2">
                     Image Link
                <input value="'.$hotel['img_link'].'" name="img_link" class="input w-full">
               </label>
                  <button type="submit" class="btn btn-accent">Confirm</button>
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