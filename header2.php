<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Transparent Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 50;
            /* Ensure it's above other content */

        }
    </style>
</head>

<body>
    <nav id="navbar" class="navbar fixed -mt-16 inset-x-0  backdrop-filter bg-white  z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 bg-white ">
                <div class="flex-shrink-0">
                    <img class="h-[70px] w-20" src="img/logo.png">
                </div>
                <!-- Mobile Menu Toggle -->
                <div class="flex items-center sm:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-800 hover:text-gray-600 " aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                        <!-- Icons for closed and opened states -->
                        <!-- Icon when menu is closed. -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        <!-- Icon when menu is open. -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden sm:flex sm:ml-6">
                    <div class="flex space-x-4">
                        <a href="index.php" class="nav-link text-slate-800  hover:text-[#CCA300] px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="about.php" class="nav-link text-slate-800  hover:text-[#CCA300] px-3 py-2 rounded-md text-sm font-medium">About</a>
                        <a href="Packages.php" class="nav-link text-slate-800  hover:text-[#CCA300] px-3 py-2 rounded-md text-sm font-medium">Packages</a>
                        <a href="gallery.php" class="nav-link text-slate-800  hover:text-[#CCA300] px-3 py-2 rounded-md text-sm font-medium">Gallery</a>
                        <a href="contact.php" class="nav-link text-slate-800  hover:text-[#CCA300] px-3 py-2 rounded-md text-sm font-medium">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden hidden bg-white" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="index.php" class=" text-gray-800 hover:text-[#CCA300] block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="about.php" class=" text-gray-800 hover:text-[#CCA300] block px-3 py-2 rounded-md text-base font-medium">About</a>
                <a href="Packages.php" class=" text-gray-800 hover:text-[#CCA300] block px-3 py-2 rounded-md text-base font-medium">Packages</a>
                <a href="gallery.php" class=" text-gray-800 hover:text-[#CCA300] block px-3 py-2 rounded-md text-base font-medium">Gallery</a>
                <a href="contact.php" class=" text-gray-800 hover:text-[#CCA300] block px-3 py-2 rounded-md text-base font-medium">Contact Us</a>
            </div>
        </div>
    </nav>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            const navbar = document.getElementById('navbar');
            const iconOpen = this.querySelector('svg:first-child');
            const iconClose = this.querySelector('svg:last-child');
            const isExpanded = this.getAttribute('aria-expanded') === 'true';

            // Toggle expanded state
            this.setAttribute('aria-expanded', String(!isExpanded));

            // Toggle menu visibility
            menu.classList.toggle('hidden');

            // Toggle icons visibility
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');

            // Toggle navbar background color

        });
    </script>
</body>

</html>