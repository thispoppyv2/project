<?php ?>

<!doctype html>
<html data-theme="autumn" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />


</head>
<body>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script>
        tailwind.config = {
            daisyui: {
                themes: ["cupcake"],
            },
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            },
            plugins: [require("@tailwindcss/typography"), require("daisyui")],
        }
    </script>
    <?php include "../components/heronavbar.php"; ?>

    <div class="flex m-auto w-fit h-[80vh] items-center">

        <div class="card bg-green-300 font-bold p-10 text-2xl border-green-700 border ">
            Signed Up Successfully
        </div>
    </div>
    <footer>
        <?php include "../components/footer.php"; ?>
    </footer>
</body>

