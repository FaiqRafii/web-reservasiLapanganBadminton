<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IronField | Daftar</title>
    <link rel="shortcut icon" href="assets/img/logos/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
ob_start();
$tambah = isset($_GET['tambah']) ? htmlentities($_GET['tambah']) : '';
?>

<body class="bg-gradient-to-t from-black to-neutral-900 relative">
    <?php
    if ($tambah === 'gagal') {
        echo '<div id="dismiss-alert" class="absolute right-5 top-5 hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-red-50 border border-red-200 text-sm text-red-800 rounded-lg p-4 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500" role="alert" tabindex="-1" aria-labelledby="hs-dismiss-button-label">
        <div class="flex">
            <div class="shrink-0">
                <svg fill="#ee201b" width="20" height="20" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" stroke="#ee201b" stroke-width="0.005">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title></title>
                        <path d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Z"></path>
                        <path d="M128.5,74a9.67,9.67,0,0,0-14,0L100,88.5l-14-14a9.9,9.9,0,0,0-14,14l14,14-14,14a9.9,9.9,0,0,0,14,14l14-14,14,14a9.9,9.9,0,0,0,14-14l-14-14,14-14A10.77,10.77,0,0,0,128.5,74Z"></path>
                    </g>
                </svg>
            </div>
            <div class="ms-2">
                <h3 id="hs-dismiss-button-label" class="text-sm font-medium">
                    Gagal daftar akun
                </h3>
            </div>
            <div class="ps-3 ms-auto">
                <div class="-mx-1.5 -my-1.5">
                    <button type="button" class="inline-flex bg-red-50 rounded-lg p-1.5 text-red-500 hover:bg-red-100 focus:outline-hidden focus:bg-red-100 dark:bg-transparent dark:text-red-600 dark:hover:bg-read-800/50 dark:focus:bg-read-800/50" data-hs-remove-element="#dismiss-alert">
                        <span class="sr-only">Dismiss</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>';
    }
    ?>
    <div class="flex justify-center items-center h-full">
        <div class="w-2/6 h-fit pb-16 rounded-2xl bg-black border border-neutral-900 shadow-2xl">
            <a href="./" class="flex justify-center items-center w-full mt-15">
                <img src="assets/img/logos/logo2.png" class="w-35 h-fit" alt="">
            </a>
            <div class="mt-5 px-10">
                <form action="controller/register.php" method="POST">
                    <div class="flex justify-center items-center mb-5">
                        <h1 class=" font-bold text-xl text-white">Daftar Akun</h1>
                    </div>
                    <label for="input-group-1" class="block mb-2 text-sm  text-neutral-600">Nama</label>
                    <div class="relative mb-4">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg fill="currentColor" class="w-4 h-4 text-neutral-600" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M12,11A5,5,0,1,0,7,6,5.006,5.006,0,0,0,12,11Zm0-8A3,3,0,1,1,9,6,3,3,0,0,1,12,3ZM3,22a9,9,0,0,1,18,0,1,1,0,0,1-2,0A7,7,0,0,0,5,22a1,1,0,0,1-2,0Z"></path>
                                </g>
                            </svg>
                        </div>
                        <input type="text" id="nama" name="nama" class="bg-neutral-900 border border-neutral-800 text-white placeholder:text-neutral-700 text-sm rounded-lg  focus:ring-blue-500 focus:border-neutral-500 block w-full ps-10 p-2.5" placeholder="Masukkan nama anda">
                    </div>
                    <label for="input-group-1" class="block mb-2 text-sm  text-neutral-600">Email</label>
                    <div class="relative mb-4">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-neutral-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                            </svg>
                        </div>
                        <input type="email" id="email" name="email" class="bg-neutral-900 border border-neutral-800 text-white placeholder:text-neutral-700 text-sm rounded-lg  focus:ring-blue-500 focus:border-neutral-500 block w-full ps-10 p-2.5" placeholder="name@gmail.com">
                    </div>
                    <label for="input-group-1" class="block mb-3 text-sm  text-neutral-600">Password</label>
                    <div class="relative mb-2">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg viewBox="0 0 24 24" class="w-5 h-5 text-neutral-700" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9771 14.7904C21.6743 12.0932 21.6743 7.72013 18.9771 5.02291C16.2799 2.3257 11.9068 2.3257 9.20961 5.02291C7.41866 6.81385 6.8169 9.34366 7.40432 11.6311C7.49906 12 7.41492 12.399 7.14558 12.6684L3.43349 16.3804C3.11558 16.6984 2.95941 17.1435 3.00906 17.5904L3.24113 19.679C3.26587 19.9017 3.36566 20.1093 3.52408 20.2677L3.73229 20.4759C3.89072 20.6343 4.09834 20.7341 4.32101 20.7589L6.4096 20.9909C6.85645 21.0406 7.30164 20.8844 7.61956 20.5665L8.32958 19.8565L6.58343 18.1294C6.28893 17.8382 6.28632 17.3633 6.5776 17.0688C6.86888 16.7743 7.34375 16.7717 7.63825 17.063L9.39026 18.7958L11.3319 16.8541C11.6013 16.5848 12 16.5009 12.3689 16.5957C14.6563 17.1831 17.1861 16.5813 18.9771 14.7904ZM12.5858 8.58579C13.3668 7.80474 14.6332 7.80474 15.4142 8.58579C16.1953 9.36684 16.1953 10.6332 15.4142 11.4142C14.6332 12.1953 13.3668 12.1953 12.5858 11.4142C11.8047 10.6332 11.8047 9.36684 12.5858 8.58579Z" fill="#525252"></path>
                                </g>
                            </svg>
                        </div>
                        <input type="password" id="password" name="password" class="bg-neutral-900 border border-neutral-800 text-white placeholder:text-neutral-700 text-sm rounded-lg  focus:ring-blue-500 focus:border-neutral-500 block w-full ps-10 p-2.5" placeholder="Masukkan password anda">
                    </div>
                    <label for="input-group-1" class="block mb-2 text-sm  text-neutral-600">Nomor HP</label>
                    <div class="relative mb-8">
                        <div class="absolute inset-y-0 start-0 flex items-center justify-center pl-2 pointer-events-none">
                            <div class=" text-neutral-600 text-sm">+62</div>
                        </div>
                        <input type="text" id="noHp" name="noHp" class="bg-neutral-900 border border-neutral-800 text-white placeholder:text-neutral-700 text-sm rounded-lg  focus:ring-blue-500 focus:border-neutral-500 block w-full ps-10 p-2.5" placeholder="8xxxxxx">
                    </div>
                    <div class="flex justify-center items-center">
                        <input type="submit" value="Daftar" class="bg-gradient-to-bl from-red-700 to-red-900 hover:bg-gradient-to-tr  text-white hover:cursor-pointer hover:bg-[#5D320E] transition-all ease-in duration-75 px-5 py-1.5  font-semibold text-sm rounded">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>