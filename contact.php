<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Contact</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css" />

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;700&display=swap");

        * {
            font-family: "Source Serif Pro", serif;
        }
    </style>
</head>

<body class="mx-0 mt-16 p-0 overflow-x-hidden bg-cover bg-center bg-no-repeat" style="background-image: url('img/contact.jpeg')">

    <?php include 'header2.php'; ?>

    <div class="flex flex-col md:flex-col xl:flex-row w-screen gap-8 px-4 md:px-16 py-16 mt-10">
        <div class="flex flex-col gap-4 border-2 rounded-3xl border-black px-6 py-16 w-full bg-white">
            <div class="flex flex-col w-full gap-2">
                <label for="name">Name</label>
                <input class="w-full border-2 border-black rounded-md p-2" name="name" id="name" type="text" placeholder="E.g john doe" />
            </div>
            <div class="flex flex-col w-full gap-2">
                <label for="email">Email</label>
                <input class="w-full border-2 border-black rounded-md p-2" name="email" id="email" type="email" placeholder="E.g john@example.com" />
            </div>
            <div class="flex flex-col w-full gap-2">
                <label for="message">Message</label>
                <textarea class="w-full border-2 border-black rounded-md p-2 h-40" name="message" id="message" placeholder="Please input your message"></textarea>
            </div>
            <div class="flex justify-center">
                <button class="mt-4 w-[170px] h-[50px] bg-[#CCA300] text-white text-lg font-semibold rounded hover:bg-[#816b20]">
                    Submit
                </button>
            </div>
        </div>
        <div class="flex flex-col gap-4 border-2 rounded-3xl border-black px-6 py-16 w-full bg-white h-fit self-center">
            <div class="flex-row">
                <h2 class="text-3xl font-semibold">Company Name</h2>
            </div>
            <div class="mt-4 flex-row">
                <ul class="text-lg flex gap-4 items-center">
                    <li class="flex flex-row gap-4">
                        <i class="fas fa-map-marker-alt justify-items-center self-center text-3xl"></i>
                        <p>
                            banjar triwangsa, dangin bingin desa kelusa, payangan-gianyar
                        </p>
                    </li>
                </ul>
            </div>
            <div class="mt-4 flex-row">
                <ul class="text-lg flex gap-4 items-center">
                    <li class="flex flex-row gap-4">
                        <i class="far fa-envelope justify-items-center self-center text-3xl"></i>
                        <p>example@gmail.com</p>
                    </li>
                </ul>
            </div>
            <div class="mt-4 flex-row">
                <ul class="text-lg flex gap-4 items-center">
                    <li class="flex flex-row gap-4">
                        <i class="fas fa-phone-alt justify-items-center self-center text-3xl"></i>
                        <p>+6281-1234-5678</p>
                    </li>
                </ul>
            </div>
            <div class="mt-4 flex-row">
                <ul class="text-lg flex gap-4 items-center">
                    <li class="flex flex-row gap-4">
                        <i class="fab fa-whatsapp justify-items-center self-center text-3xl"></i>
                        <p>+6281-1234-5678</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Floating WhatsApp Button -->
    <a href="#" class="floating-wa-btn" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <?php include 'footer.php'; ?>

    <!-- <script>
    </script> -->
</body>

</html>