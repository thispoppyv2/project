<?php

// dito po kayo po gumawa po ng navbar po


$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

if ($curPageName == "dashboard.php") {
    echo '
<div class="navbar bg-amber-950/10 w-full m-auto">
    <div class="w-3/4 items-center m-auto">
    <div class="flex-1 ">
        <a href="#" class="btn btn-ghost text-xl">Hotel De Luna</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            <li class="flex flex-row gap-1 " >
                <a href="../dashboard.php" class="btn btn-neutral active">Dashboard</a>
                    <a href="../management.php" class="btn btn-ghost active">Management</a>
                <a href="../index.php" class="btn btn-ghost">Sign Out</a>
            </li>
    
          
        </ul>
    </div>
</div>
</div>
';
} elseif ($curPageName == "management.php") {
    echo '
<div class="navbar bg-amber-950/10 w-full m-auto">
    <div class="w-3/4 items-center m-auto">
    <div class="flex-1 ">
        <a href="../index.php" class="btn btn-ghost text-xl">Hotel De Luna</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            <li class="flex flex-row gap-1 " >
                <a href="../customer-dashboard.php" class="btn btn-ghost active">Home</a>
                    <a href="../booked-room.php" class="btn btn-neutral active">Booked Room</a>
                <a href="../index.php" class="btn btn-ghost">Sign Out</a>
           
            </li>
    
          
        </ul>
    </div>
</div>
</div>
';
} else {
    echo '
<div class="navbar bg-amber-950/10 w-full m-auto">
    <div class="w-3/4 items-center m-auto">
    <div class="flex-1 ">
        <a href="../index.php" class="btn btn-ghost text-xl">Hotel De Luna</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            <li class="flex flex-row gap-1 " >
                <a href="../customer-dashboard.php" class="btn btn-ghost active">Home</a>
                    <a href="../booked-room.php" class="btn btn-ghost active">Booked Room</a>
                <a href="../index.php" class="btn btn-ghost">Sign Out</a>
           
            </li>
    
          
        </ul>
    </div>
</div>
</div>
';
}



