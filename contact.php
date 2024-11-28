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
<?php include "./components/heronavbar.php"; ?>
<div class=" h-fit m-auto my-5 prose card card-bordered p-5">
    <div>
        <h1>Contact Us</h1>
        <p>Address: 123 Moonlit Lane, Celestial City, Starry Skies 99999</p>
        <p>Phone: +1-800-MOONLIT</p>
        <p>Email: reservations@hoteldelua.com</p>

        <p>For reservations, inquiries, or to experience the magic of Hotel de Luna, please reach out to us. Our dedicated team is ready to assist you in planning your unforgettable stay. Whether you have questions about our accommodations, dining options, spa services, or special events, we're here to provide personalized guidance and ensure a seamless booking process.</p>

        <p>Discover a world of enchantment and luxury. Contact us today and let us create a truly extraordinary experience for you.</p>
    </div>
</div>
<footer class="mt-[75vh]">
    <?php include "./components/footer.php"; ?>
</footer>
</body>