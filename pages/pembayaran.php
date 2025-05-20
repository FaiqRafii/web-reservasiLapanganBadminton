<?php
session_start();

$hargaPaket = $_GET['hargaPaket'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IronField - #1 Badminton Field</title>

    <!-- Meta SEO -->
    <meta name="title" content="Landwind - Tailwind CSS Landing Page">
    <meta name="description" content="Get started with a free and open-source landing page built with Tailwind CSS and the Flowbite component library.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Themesberg">

    <!-- Social media share -->
    <meta property="og:title" content=Landwind - Tailwind CSS Landing Page>
    <meta property="og:site_name" content=Themesberg>
    <meta property="og:url" content=https://https://demo.themesberg.com/landwind />
    <meta property="og:description" content=Get started with a free and open-source landing page for Tailwind CSS built with the Flowbite component library featuring dark mode, hero sections, pricing cards, and more.>
    <meta property="og:type" content="">
    <meta property="og:image" content=https://themesberg.s3.us-east-2.amazonaws.com/public/github/landwind/og-image.png>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@themesberg" />
    <meta name="twitter:creator" content="@themesberg" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/logos/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/logos/logo.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


    <link rel="stylesheet" href="assets/css/date.css" />
    <script defer src="assets/js/dateHome.js"></script>


</head>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>


<body class="bg-gradient-to-t from-black to-neutral-900">
    <div class="flex h-screen justify-center items-center">
        <div class="w-1/2 h-fit bg-gradient-to-tl from-black to-neutral-900 border border-neutral-800 rounded-xl text-white relative">
            <img src="../assets/img/logos/logo2.png" class="w-30 absolute right-7 mt-7 h-fit" alt="">
            <div class="grid grid-cols-[40%_60%]">
                <div class="p-7 text-center">
                    <img src="../assets/img/qris.jpg" class="" alt="">
                    <a href="../assets/img/qris.jpg" download="<?= time() ?>.jpg">
                        <div class="mt-3 mx-auto flex gap-x-1 justify-center items-center bg-black border border-neutral-700 w-fit h-fit px-4 py-0.5 rounded-lg hover:bg-green-600 transition-all ease-in duration-100">
                            <svg viewBox="0 0 24 24" class="w-4 h-fit" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g id="Interface / Download">
                                        <path id="Vector" d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                            Unduh
                        </div>
                    </a>
                </div>
                <div class="p-7">
                    <div class="text-xl mt-5">
                        Total
                    </div>
                    <div class="text-3xl font-bold">
                        Rp
                        <?= number_format($hargaPaket, 0, ',', '.') ?>
                    </div>
                    <ul class="ml-5 mt-5" style="list-style-type: decimal;">
                        <li>Lakukan pembayaran sejumlah total</li>
                        <li>Simpan bukti pembayaran</li>
                        <li>Konfirmasi ke <span><a href="" class="font-bold hover:text-green-500">Admin</a></span> dengan mengirim bukti pembayaran</li>
                        <li>Admin approve pemesanan</li>
                        <li>Unduh E-Tiket pemesanan di profil akun menu "Pemesanan"</li>
                    </ul>
                    <a href="../">
                        <div class="mt-3 absolute right-7 flex gap-x-2.5 justify-center items-center bg-red-700 w-fit h-fit px-5 py-1.5 hover:cursor-pointer rounded-lg hover:bg-red-800 transition-all ease-in duration-100">
                            <svg viewBox="0 0 1024 1024" class="w-4 h-fit" xmlns="http://www.w3.org/2000/svg" fill="#ffffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill="#ffffff" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path>
                                    <path fill="#ffffff" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path>
                                </g>
                            </svg>
                            Kembali Ke Beranda
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</body>


</html>