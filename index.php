
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

<?php include "./components/heronavbar.php"; ?>


<div class='m-auto flex'>
<div>
    <div class="text-7xl text-center w-fit py-10 m-auto font-bold">
        Hotel De Luna
    </div>
    <div class="carousel w-3/5 m-auto flex rounded-2xl mb-10">
        <div id="slide1" class="carousel-item relative w-full">
            <img
                    src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp"
                    class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide4" class="btn btn-circle">❮</a>
                <a href="#slide2" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide2" class="carousel-item relative w-full">
            <img
                    src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
                    class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide1" class="btn btn-circle">❮</a>
                <a href="#slide3" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide3" class="carousel-item relative w-full">
            <img
                    src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
                    class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide2" class="btn btn-circle">❮</a>
                <a href="#slide4" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide4" class="carousel-item relative w-full">
            <img
                    src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
                    class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide3" class="btn btn-circle">❮</a>
                <a href="#slide1" class="btn btn-circle">❯</a>
            </div>
        </div>
    </div>
</div>

</div>


<div class="p-5 flex flex-row w-3/5 m-auto gap-5">
    <div class="card bg-base-100 w-96 shadow-xl m-auto p-1">
        <figure>
            <img
                    src="https://scontent.fmnl8-4.fna.fbcdn.net/v/t1.15752-9/462550168_913582737072070_5008661344494815039_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeFuoMkrTmmwKpsuo0Ge20j9kHgRW4VvYrCQeBFbhW9isFL_hJhhqoUdp3kqGYAmmedOCpym0b9xTPP9eg0xVzqT&_nc_ohc=IfQz4lDthgUQ7kNvgGbHIct&_nc_zt=23&_nc_ht=scontent.fmnl8-4.fna&oh=03_Q7cD1QGAodAJV2-Pbrh8NF3fLSbiYNurhssjb_6D4gXSB0K--Q&oe=676F75EC"
                     alt="Shoes" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Standard Room</h2>
            <p>"Cozy Comfort" - Relax in our essential rooms, perfect for budget-conscious travelers.<br><br><br>
            </p>
            <div class="card-actions justify-end">
                <a href="/Pages/book.php" class="btn btn-primary">Book Now</a>
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
            <p>"Elevated Experience" - Upgrade to spacious rooms with premium amenities for a memorable stay.<br><br></p>
            <div class="card-actions justify-end">
                <a href="/Pages/book.php" class="btn btn-primary">Book Now</a>
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
            <p>"Luxury Haven" - Indulge in opulent suites with top-notch services, tailored for discerning guests. <br><br></p>
            <div class="card-actions justify-end">
                <a href="/Pages/book.php" class="btn btn-primary">Book Now</a>
            </div>
        </div>
    </div>
</div>


</body>
<footer>
    <?php include "./components/footer.php"; ?>
</footer>
</html>

