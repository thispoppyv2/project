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
<?php include "./components/dashboardnavbar.php"; ?>
<div class="card card-bordered w-3/4 p-1 my-5 m-auto">
    <div class="card-body">
        <div class="card-title text-4xl justify-between">Hotels
            <h1 class="card-actions">
                <button onclick="my_modal_1.showModal()" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
                    Add Hotel
                </button>
            </h1>
        </div>

        <?php include "./components/hotels-table.php"; ?>
    </div>
</div>
</body>


<dialog id="my_modal_1" class="modal">
    <div class="modal-box">
        <h3 class="text-lg font-bold">Add Hotel</h3>
        <div class="modal-action">

                <form method="POST" action="#" class="flex flex-col gap-4 py-5 w-full">
                    <label class="input input-bordered flex items-center gap-2">
                        Name
                        <input type="text" class="grow border-0 rounded-md" placeholder="Daisy" />
                    </label>
                    <label class="input input-bordered flex items-center gap-2">
                        Address
                        <input type="text" class="grow border-0 rounded-md" placeholder="" />
                    </label>
                    <label class="input input-bordered flex items-center gap-2">
                        Contact Number
                        <input type="text" class="grow border-0 rounded-md" placeholder="" />
                    </label>
                    <label class="input input-bordered flex items-center gap-2">
                        Image Link
                        <input type="text" class="grow border-0 rounded-md" placeholder="" />
                    </label>
                    <div class="card-actions flex flex-col end-0">
                        <button type="submit" class="place-self-end btn w-fit btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
                            Add Hotel
                        </button>
                    </div>
                </form>
        
        </div>
    </div>
</dialog>
</html>