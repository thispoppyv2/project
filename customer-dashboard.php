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
<?php include "./components/customer-navbar.php"; ?>
<div class="w-3/4 m-auto text-4xl font-bold mt-5">
    Dashboard
</div>
<div class="grid grid-cols-4 w-3/4 m-auto gap-5">

</div>

<div class="p-5 flex flex-row w-3/5 m-auto gap-3">
    <div class="card bg-base-100 w-96 shadow-xl m-auto p-1">
        <figure>
            <img
                    src="https://scontent.fmnl8-6.fna.fbcdn.net/v/t1.15752-9/462584209_2318808791851970_1736446341966561453_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeHxlEZWzMlAPtt4lGeVs59qPW_F_KnqjF09b8X8qeqMXbzC58xthCviVF70K_gZ5y565T3oZ3n012_nQ1YiXzCp&_nc_ohc=1i2Bye-d55wQ7kNvgGVO_AA&_nc_zt=23&_nc_ht=scontent.fmnl8-6.fna&oh=03_Q7cD1QFvLMAbvwXqohXI8Dok8tnuNxmYnD1ilIZTchlzMVwLZg&oe=676F99DD"
                    alt="Shoes" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Standard Room</h2>
            <p>"Cozy Comfort" - Relax in our essential rooms, perfect for budget-conscious travelers.<br><br>
            </p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Book Now</button>
            </div>
        </div>
    </div>
    <div class="card bg-base-100 w-96 shadow-xl m-auto p-1">
        <figure>
            <img
                    src="https://scontent.fmnl8-4.fna.fbcdn.net/v/t1.15752-9/462550168_913582737072070_5008661344494815039_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeFuoMkrTmmwKpsuo0Ge20j9kHgRW4VvYrCQeBFbhW9isFL_hJhhqoUdp3kqGYAmmedOCpym0b9xTPP9eg0xVzqT&_nc_ohc=IfQz4lDthgUQ7kNvgGbHIct&_nc_zt=23&_nc_ht=scontent.fmnl8-4.fna&oh=03_Q7cD1QGAodAJV2-Pbrh8NF3fLSbiYNurhssjb_6D4gXSB0K--Q&oe=676F75EC"
                    alt="Shoes" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Deluxe Room</h2>
            <p>"Elevated Experience" - Upgrade to spacious rooms with premium amenities for a memorable stay. </p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Book Now</button>
            </div>
        </div>
    </div>
    <div class="card bg-base-100 w-96 shadow-xl m-auto p-1">
        <figure>
            <img
                    src="https://scontent.fmnl8-1.fna.fbcdn.net/v/t1.15752-9/462555694_589706760262410_3743343193774319040_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGE1LUYuAhnqF9E5XUH1DePec9JAp_p5gN5z0kCn-nmA1qDKI9reWpMrwF6FH8-YcE1Sjmpq8CbGZhG-cAwgeNB&_nc_ohc=829heOUHp9oQ7kNvgFw5Hsr&_nc_zt=23&_nc_ht=scontent.fmnl8-1.fna&oh=03_Q7cD1QHL54a4ghVpvNf5suZ4pNH4RNenm0xp6hLKEC29TH1E2A&oe=676F9BBD"
                    alt="Shoes" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Premium Room</h2>
                <p>
                    "Luxury Haven" - Indulge in opulent suites with top-notch services, tailored for discerning guests.
                </p>

            <div class="card-actions justify-end">
                <button class="btn btn-primary">Book Now</button>
            </div>
        </div>
    </div>

</body>
</html>