<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .hidden {
            display: none;
        }
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }
        .popup img {
            max-width: 90%;
            max-height: 90%;
        }
        .popup-close {
            position: absolute;
            top: 10px;
            right: 20px;
            cursor: pointer;
            color: red;
            font-size: 24px;
        }
        .gallery-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body class="bg-gray-100">

    <header class="bg-white shadow p-4 flex justify-between items-center">
        <img class="h-11" src="img/logo.png">
        <a href="gallery.php" class="right-0 top-0 mr-2">
            <i class="fas fa-sign-out-alt text-2xl"></i>
        </a>
    </header>

    <div class="container mx-auto py-8">
        <div id="gallery" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 px-4">
            <!-- Photos will be dynamically loaded here -->
        </div>
        <div class="text-center mt-4">
            <button id="read-more-btn" class="bg-green-500 text-white px-4 py-2 rounded">View More</button>
            <button id="read-less-btn" class="bg-green-500 text-white px-4 py-2 rounded hidden">See Less</button>
        </div>
    </div>

    <!-- Popup Container -->
    <div id="popup-container" class="popup" onclick="closePopup(event)">
        <span class="popup-close" onclick="closePopup(event)">&times;</span>
        <img id="popup-img" src="" alt="">
    </div>

    <script>
        const images = [
            "img/img-1.jpg", "img/img-2.jpg", "img/img-4.jpg", "img/img-5.jpg", "img/img-6.jpg",
            "img/img-7.jpg", "img/img-8.jpg", "img/img-9.jpg", "img/img-10.jpg", "img/img-11.jpg",
            "img/img-12.jpg", "img/img-13.jpg", "img/img-14.jpeg", "img/img-15.jpg", "img/img-16.jpg",
            "img/img-17.jpg", "img/img-18.jpg", "img/img-19.jpg", "img/img-20.jpg", "img/img-21.jpg",
            "img/img-22.jpg", "img/img-23.jpg", "img/img-24.jpg", "img/img-25.jpg", "img/img-26.jpg",
            "img/img-27.jpg", "img/img-28.jpg", "img/img-29.jpg"
        ];
        let currentIndex = 0;

        function loadImages() {
            const gallery = document.getElementById("gallery");
            const fragment = document.createDocumentFragment();
            for (let i = currentIndex; i < currentIndex + 10 && i < images.length; i++) {
                const img = document.createElement("img");
                img.src = images[i];
                img.alt = `Photo ${i + 1}`;
                img.className = "gallery-img";
                img.onclick = () => openPopup(images[i]);
                fragment.appendChild(img);
            }
            gallery.appendChild(fragment);
            currentIndex += 10;

            // Toggle buttons
            if (currentIndex >= images.length) {
                document.getElementById("read-more-btn").classList.add("hidden");
            } else {
                document.getElementById("read-more-btn").classList.remove("hidden");
            }

            if (currentIndex > 20) {
                document.getElementById("read-less-btn").classList.remove("hidden");
            } else {
                document.getElementById("read-less-btn").classList.add("hidden");
            }
        }

        function resetImages() {
            const gallery = document.getElementById("gallery");
            gallery.innerHTML = "";
            currentIndex = 0;
            loadImages();
        }

        function openPopup(imgSrc) {
            const popup = document.getElementById("popup-container");
            const popupImg = document.getElementById("popup-img");
            popupImg.src = imgSrc;
            popup.style.display = "flex";
        }

        function closePopup(event) {
            if (event.target.id !== 'popup-img' && event.target.className !== 'popup-close') {
                const popup = document.getElementById("popup-container");
                popup.style.display = "none";
            }
        }

        document.getElementById("read-more-btn").addEventListener("click", loadImages);
        document.getElementById("read-less-btn").addEventListener("click", resetImages);

        // Load initial images
        loadImages();
    </script>

</body>

</html>
