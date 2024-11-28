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
<body class="h-svh ">
<?php include "../components/heronavbar.php"; ?>
<div>
    <form action="../backend/add-book.php" method="post">
        <div class="max-w-lg m-auto card card-bordered h-1/2 p-5 my-10 flex ">
            <div class="card">
                <div>
                    <div class=" alert alert-success text-white">
                      <div class="animate-ping transition duration-100">
                          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                      </div>
                        <span>Booking added successfully!</span>
                    </div>
                </div>



            </div>
    </form>
</div>
<footer class="pt-[70vh]">
    <?php include "../components/footer.php"; ?>
</footer>
</body>

