<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Packages</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="m-0 p-0 overflow-x-hidden font-serif">
    <?php include 'header.php'; ?>

    <!-- hero -->
    <section class="hero relative h-screen">
        <img src="img/hero2.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <p class="text-white text-5xl font-bold" style="font-family: 'Source Serif Pro', serif" data-aos="fade-up">
                Package
            </p>
        </div>
    </section>

    <!-- mode desktop & tablet -->
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

    <div class="flex justify-center py-8 px-4 md:px-32 w-full mt-8" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3946.591188106544!2d115.25426097501207!3d-8.441743891598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMjYnMzAuMyJTIDExNcKwMTUnMjQuNiJF!5e0!3m2!1sen!2sid!4v1719562972621!5m2!1sen!2sid" width="1030" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <div class="flex justify-center text-4xl font-bold mt-12 mx-auto border-b-2 border-b-[#CCA300] w-52" data-aos="fade-up">
        <h2>ACTIVITY</h2>
    </div>

    <div class="py-8 px-4 md:px-32 w-full mt-8" data-aos="fade-up">
        <div class="flex flex-col lg:flex-row gap-8">
            <div class="rounded overflow-hidden flex flex-col items-center" data-aos="flip-right" data-aos-delay="0">
                <img src="img/img-2.jpg" alt="" class="w-full max-w-full" />
                <div class="px-6 py-6">
                    <div class="font-bold text-xl mb-2 text-center">Cycling</div>
                </div>
            </div>
            <div class="rounded overflow-hidden flex flex-col items-center" data-aos="flip-right" data-aos-delay="200">
                <img src="img/img-1.jpg" alt="" class="w-full max-w-full" />
                <div class="px-6 py-6">
                    <div class="font-bold text-xl mb-2 text-center">
                        Enjoying the Stunning Natural Scenery in Bali: Nature Tourism
                    </div>
                </div>
            </div>
            <div class="rounded overflow-hidden flex flex-col items-center" data-aos="flip-right" data-aos-delay="400">
                <img src="img/img-8.jpg" alt="" class="w-full max-w-full" />
                <div class="px-6 py-6">
                    <div class="font-bold text-xl mb-2 text-center">Consumption</div>
                </div>
            </div>
        </div>
    </div>

    <!-- mode desktop & tablet -->
    <div class="flex flex-col lg:flex-row py-8 px-4 lg:px-8 lg:mx-0 mt-8" data-aos="fade-up">
        <img src="img/img-10.jpg" alt="" class="w-full lg:w-1/2 max-w-full mx-auto lg:mx-0" />
        <div class="p-8 lg:ml-8">
            <h1 class="text-black-900 font-bold text-4xl">
                Explore Traditional Balinese Culture Through Cycling
            </h1>
            <p class="mt-8 text-black-600 text-base">
                Discover the essence of traditional Balinese culture through our enriching cycling experiences. Immerse yourself in the serene landscapes of rural Bali, from lush rice fields to ancient temples, and interact with local farmers during their harvest season. Enjoy a relaxing break in a hidden valley with a delicious lunch amidst breathtaking natural beauty. End your journey with a visit to a local Balinese house and a coffee plantation, experiencing the authentic flavors and aromas of luwak coffee.
            </p>
            <div class="flex items-center mt-8">
                <a href="#" class="flex justify-center text-center items-center w-[220px] h-[50px] bg-[#CCA300] text-white text-lg font-semibold rounded transition-colors duration-300 hover:text-white hover:bg-[#816b20]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mr-2">
                        <path fill="currentColor" d="M12.006 4.295c-2.67 0-5.338.784-7.645 2.353H0l1.963 2.135a5.997 5.997 0 0 0 4.04 10.43a5.98 5.98 0 0 0 4.075-1.6L12 19.705l1.922-2.09a5.97 5.97 0 0 0 4.072 1.598a6 6 0 0 0 6-5.998a5.98 5.98 0 0 0-1.957-4.432L24 6.648h-4.35a13.57 13.57 0 0 0-7.644-2.353M12 6.255c1.531 0 3.063.303 4.504.903C13.943 8.138 12 10.43 12 13.1c0-2.671-1.942-4.962-4.504-5.942A11.7 11.7 0 0 1 12 6.256zM6.002 9.157a4.059 4.059 0 1 1 0 8.118a4.059 4.059 0 0 1 0-8.118m11.992.002a4.057 4.057 0 1 1 .003 8.115a4.057 4.057 0 0 1-.003-8.115m-11.992 1.93a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256m11.992 0a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256" />
                    </svg>
                    More Info TripAdvisor
                </a>
            </div>
        </div>
    </div>

    <!-- Floating WhatsApp Button -->
    <a href="#" class="floating-wa-btn" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- footer -->
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
</body>

</html>