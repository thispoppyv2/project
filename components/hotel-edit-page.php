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


<form action="../backend/hotel-edit.php" method="post">
    <div class="w-1/2 m-auto card card-bordered h-1/2 p-5 my-10 flex ">
        <h1 class="text-center text-3xl font-bold">Edit Hotel</h1>
        <div class="card">"
            <?php
            $id = $_GET["id"];
            echo '<input type="hidden" name="hotel_id" value="<?php echo $id ?>"/>';
            ?>

    </div>
</form>



</body>