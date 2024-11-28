<?php ?>

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
                        clifford: '#da373d',
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
<?php include "../components/heronavbar.php"; ?>
<div class="grid grid-cols-2 w-3/5 m-auto my-auto h-[90vh] items-center">
        <div class="m-auto ">
            <div class=" flex flex-col">
                <div class="font-bold text-4xl">
                    BOOK WITH US
                </div>
                <div class="">
                    Experience the luxury and elegance of Hotel de Luna, where every detail is designed to make your stay unforgettable. Our hotel features stunning architecture, world-class dining, and a luxurious spa. Book your stay today and experience the magic of Hotel de Luna.
                </div>
            </div>

        </div>
        <div class="card bg-neutral-50 w-4/5 m-auto p-5">
            <div class=''>
                <h1 class="text-3xl font-bold">Log IN</h1>
                <h3>Let's get you started</h3>
                <?php if (isset($_GET['error']) && !empty($_GET['error'])) {
                    echo '<div class="alert alert-error">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ban"><circle cx="12" cy="12" r="10"/><path d="m4.9 4.9 14.2 14.2"/></svg>
        <span>' . $_GET['error'] . '</span>
    </div>';
                }?>
                <div>
                    <form method="POST" action="../backend/login-action.php" class="flex flex-col gap-4 py-5">
                        <label class="input input-bordered flex items-center gap-2">
                            Email
                            <input type="text" class="grow border-0 rounded-md" name="email" placeholder="Daisy" required />
                        </label>
                        <label class="input input-bordered flex items-center gap-2">
                            Password
                            <input type="password" class="grow border-0 rounded-md" name="password" placeholder="" required />
                        </label>
                        <button class="w-full btn btn-primary">Log in</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
<footer>
    <?php include "../components/footer.php"; ?>
</footer>
</body>
