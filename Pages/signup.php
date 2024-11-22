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
        <div class="card bg-neutral-50 m-auto p-5">
            <div class=''>
                <h1 class="text-3xl font-bold">Sign Up</h1>
                <h3>Let's get you started</h3>
                <div>
                    <form method="post" action="/backend/signup_action.php" class="flex flex-col gap-4 py-5">
                        <label class="input input-bordered flex items-center gap-2">
                            First Name
                            <input id="fname" name="fname" type="text" class="grow border-0 rounded-md" required placeholder="Daisy" />
                        </label>
                        <label class="input input-bordered flex items-center gap-2">
                            Last Name
                            <input id="lname" name="lname" type="text" class="grow border-0 rounded-md" required  placeholder="Daisy" />
                        </label>
                        <label class="input input-bordered flex items-center gap-2">
                            Email
                            <input id="email" name="email" type="text" class="grow border-0 rounded-md" required placeholder="Daisy" />
                        </label>

                        <label class="input input-bordered flex items-center gap-2">
                            Password
                            <input id="password" name="password" type="password" class="grow border-0 rounded-md" required placeholder="Daisy" />
                        </label>

                        <button class="w-full btn btn-primary">Create an Account</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <footer>
        <?php include "../components/footer.php"; ?>
    </footer>
</body>

