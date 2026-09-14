<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Tentang Kami</title>

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

<body class="m-0 p-0 overflow-x-hidden font-serif">
    <!-- Nav -->
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="hero relative h-screen">
        <img src="img/hero4.jpeg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <p class="text-white text-5xl font-bold" style="font-family: 'Source Serif Pro', serif" data-aos="fade-up">
                About Us
            </p>
        </div>
    </section>

    <section class="hidden lg:block">
        <div class="flex flex-col lg:flex-row items-center lg:items-start my-16 px-2 lg:px-8" data-aos="fade-up">
            <img src="img/logo.png" alt="Cycling Benefits" class="w-full lg:w-1/2 h-[400px] object-cover aos-rotate -mt-5" />
            <div class="mt-8 lg:mt-0 lg:ml-8 flex flex-col justify-center">
                <span class="text-gray-400 text-[18px] font-bold">HERE WE ARE</span>
                <h1 class="text-5xl font-bold mt-4">Our Story</h1>
                <p class="mt-4 text-gray-600">
                    <strong>BMCT</strong> was originally formed when 2 native Balinese sons who had been in the tourism world, had the same idea of making local tourism in their birthplace, namely Kelusa village, located in the Northern part of Ubud. The first son is Dewa Dena. Dewa Dena is a freelance guide who is very friendly, funny, and helpful. This makes many tourists really like Dewa Dena's professionalism as a tour guide. The guests that were handled by Dewa Dena, frequently recommended Dewa Dena as a tour guide to their friends or family when visiting Bali. The second son is Dewa Anom who worked in the hospitality industry for almost 9 years. He understood deeply about the tourism industry, especially in Bali.
                </p>

                <div class="flex justify-center mt-7">
                    <button id="readMoreBtn" class="text-[#CCA300] font-semibold pl-6">Read More</button>
                </div>
                <div id="moreContent" class="hidden">
                    <p class="mt-4 text-gray-600">
                        These two sons have the same thoughts and beliefs about the potential of their birth village. They firmly believe in the richness, nature, and interest of their village to be shown to local and foreign tourists. In 2017, This led to the realization to make their village a tourism village based on the HINDU TRI HITA KARANA CONCEPT, which means holding their belief in God, enjoying nature without damaging it, and interacting harmoniously with fellow living beings. Therefore, BMCT was created, as a cycling activity around Kelusa village while introducing the village's daily activities, traditions, and local food. The guests could also feel the sensation of entering an authentic Balinese house, a beautiful rural atmosphere far from crowded tourist attractions. The advantage they get from this activity is seeing the real Bali. If they are lucky, the guests could also enjoy the sensation of harvesting rice with the Balinese local farmers.
                    </p>
                    <div class="flex justify-center mt-7">
                        <button id="readLessBtn" class="text-[#CCA300] font-semibold">Read Less</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col mt-6 lg:flex-row-reverse items-center lg:items-start my-16 px-2 lg:px-8" data-aos="fade-up">
            <img src="img/FOTO (36 of 599).jpg" alt="Cycling Benefits" class="w-full lg:w-1/2 h-auto object-cover" />
            <div class="mt-8 lg:mt-0 lg:mr-8 flex flex-col justify-center">
                <p class="mt-4 text-gray-600">
                    Not only do they offer cycling activities, BMCT also offers several other Bali tourism programs, such as cooking classes, private village trekking, full-day or half-day Ubud trips, White water rafting, Sunrise or Sunset Mount Batur hiking, and Batur Jeep tours. The advantages of all those programs are very flexible, where the guests can combine or request for the program they want. With this BMCT forum, we hope to build and prosper our beloved Kelusa village into an independent tourism village, to develop without destroying the existing customs and traditions, to create employment opportunities for the local community, and to introduce our beautiful cultural traditions in the international scene.
                </p>
                <div class="flex items-center mt-8">
                    <a href="#" class="flex justify-center text-center items-center w-[170px] h-[50px] bg-[#CCA300] text-white text-lg font-semibold rounded transition-colors duration-300 hover:text-white hover:bg-[#816b20]">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mode mobile -->
    <section class="lg:hidden">
        <div class="flex flex-col items-center my-16 px-2 lg:px-8" data-aos="fade-up">
            <img src="img/logo.png" alt="Manfaat Bersepeda" class="w-full h-auto object-cover" />
            <div class="mt-8 flex flex-col justify-center">
                <span class="text-gray-400 text-[18px] font-bold">DI SINI KAMI</span>
                <h1 class="text-5xl font-bold mt-4">Cerita Kami</h1>
                <p class="mt-4 text-gray-600">
                    <strong>BMCT</strong> was originally formed when 2 native Balinese sons who had been in the tourism world, had the same idea of making local tourism in their birthplace, namely Kelusa village, located in the Northern part of Ubud. The first son is Dewa Dena. Dewa Dena is a freelance guide who is very friendly, funny, and helpful. This makes many tourists really like Dewa Dena's professionalism as a tour guide. The guests that were handled by Dewa Dena, frequently recommended Dewa Dena as a tour guide to their friends or family when visiting Bali. The second son is Dewa Anom who worked in the hospitality industry for almost 9 years. He understood deeply about the tourism industry, especially in Bali., <br>
                    <br>
                    These two sons have the same thoughts and beliefs about the potential of their birth village. They firmly believe in the richness, nature, and interest of their village to be shown to local and foreign tourists. In 2017, This led to the realization to make their village a tourism village based on the HINDU TRI HITA KARANA CONCEPT, which means holding their belief in God, enjoying nature without damaging it, and interacting harmoniously with fellow living beings. Therefore, BMCT was created, as a cycling activity around Kelusa village while introducing the village's daily activities, traditions, and local food. The guests could also feel the sensation of entering an authentic Balinese house, a beautiful rural atmosphere far from crowded tourist attractions. The advantage they get from this activity is seeing the real Bali. If they are lucky, the guests could also enjoy the sensation of harvesting rice with the Balinese local farmers.
                </p>
            </div>
        </div>

        <div class="flex flex-col mt-6 items-center my-16 px-2 lg:px-8" data-aos="fade-up">
            <img src="img/FOTO (36 of 599).jpg" alt="Manfaat Bersepeda" class="w-full h-auto object-cover" />
            <div class="mt-8 flex flex-col justify-center">
                <p class="mt-4 text-gray-600">
                    Not only do they offer cycling activities, BMCT also offers several other Bali tourism programs, such as cooking classes, private village trekking, full-day or half-day Ubud trips, White water rafting, Sunrise or Sunset Mount Batur hiking, and Batur Jeep tours. The advantages of all those programs are very flexible, where the guests can combine or request for the program they want. With this BMCT forum, we hope to build and prosper our beloved Kelusa village into an independent tourism village, to develop without destroying the existing customs and traditions, to create employment opportunities for the local community, and to introduce our beautiful cultural traditions in the international scene.
                </p>
                <div class="flex items-center mt-8">
                    <a href="#" class="flex justify-center text-center items-center w-[170px] h-[50px] bg-[#71BA74] text-white text-lg font-semibold rounded transition-colors duration-300 hover:text-white hover:bg-[#61a564]">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tombol Floating WhatsApp -->
    <a href="#" class="floating-wa-btn" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true, // Animasi hanya terjadi sekali saat pertama kali masuk
        });
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('readMoreBtn').addEventListener('click', function() {
                var moreContent = document.getElementById('moreContent');
                moreContent.classList.remove('hidden');
                this.classList.add('hidden');
            });

            document.getElementById('readLessBtn').addEventListener('click', function() {
                var moreContent = document.getElementById('moreContent');
                moreContent.classList.add('hidden');
                document.getElementById('readMoreBtn').classList.remove('hidden');
            });
        });
    </script>
</body>

</html>