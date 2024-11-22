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
    <?php include "./components/dashboardnavbar.php"; ?>
    <div class="w-3/4 m-auto text-4xl font-bold mt-5">
        Dashboard
    </div>
    <div class="grid grid-cols-4 w-3/4 m-auto gap-5">
        <div class="card card-bordered my-5 border-2 border-black/25 ">

            <div class="card-body p-5">
                <div class="card-title">Total Hotels</div>
                <?php
                include './backend/connection.php';
                $sql = "SELECT * FROM hotels";

                if($result = mysqli_query($conn, $sql)){

                    // Return the number of rows in result set
                    $rowcount = mysqli_num_rows( $result );

                    // Display result
                    echo '<div class="text-5xl font-bold">'. $rowcount  . '</div>';
                }

                ?>
            </div>
        </div>
        <div class="card card-bordered my-5 border-2 border-black/25 ">

            <div class="card-body p-5">
                <div class="card-title">Total Users</div>
                <?php
                include './backend/connection.php';
                $sql = "SELECT * FROM users";

                if($result = mysqli_query($conn, $sql)){

                    // Return the number of rows in result set
                    $rowcount = mysqli_num_rows( $result );

                    // Display result
                    echo '<div class="text-5xl font-bold">'. $rowcount  . '</div>';
                }

                ?>
            </div>
        </div>
    </div>


</body>
</html>