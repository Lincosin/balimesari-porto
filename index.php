<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css" />

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="m-0 p-0 overflow-x-hidden">
    <?php include 'header.php'; ?>

    <!-- hero -->
    <section class="hero relative h-screen">
        <img src="img/hero.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center pt-10">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                    CYCLING ACTIVITY
                </h1>
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                    IN BALI
                </h1>
                <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 xl:px-48">
                    The best way to see balinese traditional culture
                </p>
                <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4 items-center justify-center">
                    <a href="#" class="flex items-center justify-center mt-4 w-[170px] h-[50px] bg-[#CCA300] text-white text-lg font-semibold rounded transition-colors duration-300 hover:text-white hover:bg-[#816b20]">
                        Our Activity
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="flex justify-center mb-10 mt-20">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-7xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-8" data-aos="fade-up">
            <div class="sm:text-lg">
                <h2 class="text-2xl font-bold mb-2 mx-10">About Us</h2>
                <hr class="h-px my-8 bg-[#CCA300] border-0 w-48" />
                <p class="mb-4">
                    BMCT was originally formed when 2 native Balinese sons who had been in the tourism world, had the same idea of making local tourism in their birthplace, namely Kelusa village, located in the Northern part of Ubud. The first son is Dewa Dena. Dewa Dena is a freelance guide who is very friendly, funny, and helpful. This makes many tourists really like Dewa Dena's professionalism as a tour guide. The guests that were handled by Dewa Dena, frequently recommended Dewa Dena as a tour guide to their friends or family when visiting Bali. The second son is Dewa Anom who worked in the hospitality industry for almost 9 years. He understood deeply about the tourism industry, especially in Bali.
                </p>
            </div>
            <div class="mt-8">
                <img src="img/img-about.jpeg" alt="Mountain Biking" class="rounded shadow-lg" data-aos="fade-up" />
            </div>
        </div>
    </section>

    <section class="mt-20 mb-[90px]" data-aos="fade-up">
        <h2 class="text-3xl font-bold mb-4 text-center">Packages</h2>
        <hr class="h-px my-8 bg-[#CCA300] border-0 w-48 mx-auto" />
        <div class="grid gap-6 mt-16 items-stretch px-4 mx-auto max-w-7xl lg:grid lg:grid-cols-3 lg:px-8 relative z-10">
            <div class="card bg-white rounded-lg shadow-lg flex flex-col">
                <div class="relative h-56 overflow-hidden">
                    <div class="absolute top-0 left-0 bg-[#CCA300] text-white px-2 py-1 z-20">07:30 am</div>
                    <img src="img/FOTO (36 of 599).jpg" alt="Ubud Package" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" />
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-semibold mb-2">Rp 700.000/Person (Ubud)</h3>
                    <p class="text-green-500 mb-2">Under 12 Years Old: Rp 600.000</p>
                    <p class="text-red-500 text-xl mb-4 italic">Min 2 persons</p>
                    <h4 class="font-semibold mb-2">Include:</h4>
                    <ul class="list-disc list-inside text-gray-500 mb-4">
                        <li>Bikes and helmets</li>
                        <li>Return shuttle</li>
                        <li>Entrance fee</li>
                        <li>Mineral water</li>
                        <li>Lunch</li>
                        <li>Professional guide</li>
                        <li>Young coconut and snack (Balinese cakes)</li>
                        <li>Free visit coffee plantation after cycling tour</li>
                    </ul>
                </div>
                <div class="p-6">
                    <button class="bg-[#CCA300] text-white px-4 py-2 rounded-lg mt-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mr-2">
                            <path fill="currentColor" d="M12.006 4.295c-2.67 0-5.338.784-7.645 2.353H0l1.963 2.135a5.997 5.997 0 0 0 4.04 10.43a5.98 5.98 0 0 0 4.075-1.6L12 19.705l1.922-2.09a5.97 5.97 0 0 0 4.072 1.598a6 6 0 0 0 6-5.998a5.98 5.98 0 0 0-1.957-4.432L24 6.648h-4.35a13.57 13.57 0 0 0-7.644-2.353M12 6.255c1.531 0 3.063.303 4.504.903C13.943 8.138 12 10.43 12 13.1c0-2.671-1.942-4.962-4.504-5.942A11.7 11.7 0 0 1 12 6.256zM6.002 9.157a4.059 4.059 0 1 1 0 8.118a4.059 4.059 0 0 1 0-8.118m11.992.002a4.057 4.057 0 1 1 .003 8.115a4.057 4.057 0 0 1-.003-8.115m-11.992 1.93a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256m11.992 0a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256" />
                        </svg>
                        Book with TripAdvisor
                    </button>
                </div>
            </div>
            <div class="card bg-white rounded-lg shadow-lg flex flex-col">
                <div class="relative h-56 overflow-hidden">
                    <div class="absolute top-0 left-0 bg-[#CCA300] text-white px-2 py-1 z-20">07:00 am</div>
                    <img src="img/img-5.jpg" alt="Sanur, Legian, Seminyak, Kuta Package" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" />
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-semibold mb-2">Rp 800.000/Person (Sanur, Legian, Seminyak, Kuta)</h3>
                    <p class="text-green-500 mb-2">Under 12 Years Old: Rp 600.000</p>
                    <p class="text-red-500 text-xl mb-4 italic">Min 2 persons</p>
                    <h4 class="font-semibold mb-2">Include:</h4>
                    <ul class="list-disc list-inside text-gray-500 mb-4">
                        <li>Bikes and helmets</li>
                        <li>Return shuttle</li>
                        <li>Entrance fee</li>
                        <li>Mineral water</li>
                        <li>Lunch</li>
                        <li>Professional guide</li>
                        <li>Young coconut and snack (Balinese cakes)</li>
                        <li>Free visit coffee plantation after cycling tour</li>
                    </ul>
                </div>
                <div class="p-6">
                    <button class="bg-[#CCA300] text-white px-4 py-2 rounded-lg mt-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mr-2">
                            <path fill="currentColor" d="M12.006 4.295c-2.67 0-5.338.784-7.645 2.353H0l1.963 2.135a5.997 5.997 0 0 0 4.04 10.43a5.98 5.98 0 0 0 4.075-1.6L12 19.705l1.922-2.09a5.97 5.97 0 0 0 4.072 1.598a6 6 0 0 0 6-5.998a5.98 5.98 0 0 0-1.957-4.432L24 6.648h-4.35a13.57 13.57 0 0 0-7.644-2.353M12 6.255c1.531 0 3.063.303 4.504.903C13.943 8.138 12 10.43 12 13.1c0-2.671-1.942-4.962-4.504-5.942A11.7 11.7 0 0 1 12 6.256zM6.002 9.157a4.059 4.059 0 1 1 0 8.118a4.059 4.059 0 0 1 0-8.118m11.992.002a4.057 4.057 0 1 1 .003 8.115a4.057 4.057 0 0 1-.003-8.115m-11.992 1.93a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256m11.992 0a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256" />
                        </svg>
                        Book with TripAdvisor
                    </button>
                </div>
            </div>
            <div class="card bg-white rounded-lg shadow-lg flex flex-col">
                <div class="relative h-56 overflow-hidden">
                    <div class="absolute top-0 left-0 bg-[#CCA300] text-white px-2 py-1 z-20">06:30 am</div>
                    <img src="img/page.jpeg" alt="Nusa Dua, Jimbaran, Canggu Package" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" />
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-semibold mb-2">Rp 900.000/Person (Nusa Dua, Jimbaran, Canggu)</h3>
                    <p class="text-green-500 mb-2">Under 12 Years Old: Rp 600.000</p>
                    <p class="text-red-500 text-xl mb-4 italic">Min 2 persons</p>
                    <h4 class="font-semibold mb-2">Include:</h4>
                    <ul class="list-disc list-inside text-gray-500 mb-4">
                        <li>Bikes and helmets</li>
                        <li>Return shuttle</li>
                        <li>Entrance fee</li>
                        <li>Mineral water</li>
                        <li>Lunch</li>
                        <li>Professional guide</li>
                        <li>Young coconut and snack (Balinese cakes)</li>
                        <li>Free visit coffee plantation after cycling tour</li>
                    </ul>
                </div>
                <div class="p-6">
                    <button class="bg-[#CCA300] text-white px-4 py-2 rounded-lg mt-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mr-2">
                            <path fill="currentColor" d="M12.006 4.295c-2.67 0-5.338.784-7.645 2.353H0l1.963 2.135a5.997 5.997 0 0 0 4.04 10.43a5.98 5.98 0 0 0 4.075-1.6L12 19.705l1.922-2.09a5.97 5.97 0 0 0 4.072 1.598a6 6 0 0 0 6-5.998a5.98 5.98 0 0 0-1.957-4.432L24 6.648h-4.35a13.57 13.57 0 0 0-7.644-2.353M12 6.255c1.531 0 3.063.303 4.504.903C13.943 8.138 12 10.43 12 13.1c0-2.671-1.942-4.962-4.504-5.942A11.7 11.7 0 0 1 12 6.256zM6.002 9.157a4.059 4.059 0 1 1 0 8.118a4.059 4.059 0 0 1 0-8.118m11.992.002a4.057 4.057 0 1 1 .003 8.115a4.057 4.057 0 0 1-.003-8.115m-11.992 1.93a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256m11.992 0a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256" />
                        </svg>
                        Book with TripAdvisor
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section class="mt-10 px-4">
        <h1 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">
            Check Out Our Gallery
        </h1>
        <hr class="h-px my-8 bg-[#CCA300] border-0 w-48 mx-auto" data-aos="fade-up" />
        <div class="flex flex-col w-full max-w-7xl mx-auto">
            <div class="gallery-content flex flex-col sm:flex-row justify-center gap-8 w-full max-w-7xl mx-auto" data-aos="fade-up">
                <div class="news-content flex flex-col max-h-[398px] w-full sm:w-[calc(50%-1rem)] lg:max-w-[334px]">
                    <div class="flex flex-col h-full bg-slate-200 rounded-lg shadow-lg overflow-hidden">
                        <div class="relative w-full h-[199px]">
                            <img src="img/hero.jpg" alt="Gallery Image 1" class="absolute inset-0 w-full h-full object-cover" />
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <p class="text-sm text-gray-500">1-01-2023</p>
                            <p class="font-semibold text-lg mt-2">
                                Lorem ipsum dolor sit amet consectetur
                            </p>
                            <p class="font-light text-sm mt-2">
                                Lorem ipsum dolor sit amet consectetur. Sed hac lorem hendrerit amet cras accumsan ut mauris tincidunt
                            </p>
                            <a href="#" class="font-semibold text-[#CCA300] mt-2">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="video-content flex flex-col w-full sm:w-[calc(50%-1rem)] lg:w-[672px]" data-aos="fade-up">
                    <iframe width="100%" height="388px" src="https://www.youtube.com/embed/nmLR7e4ba_c" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="flex flex-col w-full mx-auto max-w-7xl mt-4 p-4 rounded-lg shadow-lg bg-cover bg-no-repeat bg-center relative" style="background-image: url('img/page.jpeg')" data-aos="fade-up">
                <div class="absolute inset-0 bg-black opacity-50 rounded-lg"></div>
                <div class="relative z-10 w-full">
                    <h2 class="font-bold text-xl text-white mb-2">
                        Lorem ipsum dolor sit amet consectetur
                    </h2>
                    <p class="text-md mb-4 text-white">
                        Lorem ipsum dolor sit amet consectetur. Sed hac lorem hendrerit amet cras accumsan ut mauris tincidunt
                    </p>
                    <a href="berita.php" class="inline-block bg-[#CCA300] text-white py-2 px-4 rounded font-semibold transition duration-300 hover:bg-[#816b20]">
                        Read More Berita
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Floating WhatsApp Button -->
    <a href="#" class="floating-wa-btn" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <?php include 'footer.php'; ?>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true, // Animasi hanya terjadi sekali saat pertama kali masuk
        });
    </script>
</body>

</html>