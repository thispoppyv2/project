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
    <h1>About Us</h1>
        <h2 class="mt-0">Hotel de Luna: A Timeless Sanctuary</h2>

        <p>Hotel de Luna is more than just a hotel; it's an extraordinary experience, a timeless sanctuary nestled in a secluded realm. This legendary establishment invites discerning travelers to immerse themselves in a world of unparalleled luxury and tranquility.</p>

        <h3>A Legacy of Elegance</h3>

        <p>For centuries, Hotel de Luna has been a beacon of refined taste and impeccable service. Its iconic architecture, a harmonious blend of classic and contemporary design, creates an atmosphere of timeless elegance. Every detail, from the ornate chandeliers to the meticulously curated art collection, reflects a commitment to artistry and sophistication.</p>

        <h3>Personalized Luxury</h3>

        <p>At the heart of Hotel de Luna lies a dedicated team of hospitality experts, passionate about delivering personalized service that exceeds expectations. Whether you seek a serene escape, a romantic getaway, or a memorable celebration, our attentive staff will cater to your every whim.</p>

        <h3>Culinary Delights</h3>

        <p>Indulge your senses at our world-class restaurants, where renowned chefs craft exquisite culinary masterpieces. From traditional delicacies to innovative fusion cuisine, our diverse dining options offer a gastronomic journey that will tantalize your palate.</p>

        <h3>Wellness and Rejuvenation</h3>

        <p>Unwind and rejuvenate at our state-of-the-art spa, where a team of skilled therapists offer a range of soothing treatments. Immerse yourself in tranquility as you experience the transformative power of our signature massages, facials, and body therapies.</p>

        <h3>Beyond Luxury</h3>

        <p>Hotel de Luna is more than just a luxurious retreat; it's a commitment to sustainability and cultural preservation. We strive to minimize our environmental impact and support local communities, ensuring a positive and lasting legacy.</p>

        <p>Discover the allure of Hotel de Luna and embark on a journey of unparalleled luxury and tranquility.</p>

</div>
<footer>
    <?php include "./components/footer.php"; ?>
</footer>
</body>