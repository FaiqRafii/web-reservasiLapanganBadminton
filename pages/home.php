<body>
    <header class="fixed w-full z-50">
        <nav class="bg-white border-neutral-200 py-2.5 dark:bg-black">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a href="" class="flex items-center">
                    <img src="./assets/img/logos/logo.png" class="h-6 mr-2 sm:h-7" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">IronField</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <?php
                    if (empty($_SESSION['nama_akun'])) {
                        echo '<a href="login.php" id="loginBtn" class=" text-neutral-800 dark:text-white hover:bg-neutral-50 focus:ring-4 focus:ring-neutral-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-[#990000] focus:outline-none dark:focus:ring-neutral-800">Log in</a>';
                    } else {
                        $qPemesanan = $koneksi->query("SELECT * FROM pemesanan WHERE id_akun='" . $_SESSION['id_akun'] . "'");
                        $pemesanan = $qPemesanan->fetch_assoc();
                        $jumlahPemesanan = $qPemesanan->num_rows;

                        echo '
                        <div class="relative">
                        <div id="profileAkun" class="w-10 h-10 hover:cursor-pointer">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path opacity="0.4" d="M12 22.01C17.5228 22.01 22 17.5329 22 12.01C22 6.48716 17.5228 2.01001 12 2.01001C6.47715 2.01001 2 6.48716 2 12.01C2 17.5329 6.47715 22.01 12 22.01Z" fill="#292D32"></path>
                                    <path d="M12 6.93994C9.93 6.93994 8.25 8.61994 8.25 10.6899C8.25 12.7199 9.84 14.3699 11.95 14.4299C11.98 14.4299 12.02 14.4299 12.04 14.4299C12.06 14.4299 12.09 14.4299 12.11 14.4299C12.12 14.4299 12.13 14.4299 12.13 14.4299C14.15 14.3599 15.74 12.7199 15.75 10.6899C15.75 8.61994 14.07 6.93994 12 6.93994Z" fill="#292D32"></path>
                                    <path d="M18.7807 19.36C17.0007 21 14.6207 22.01 12.0007 22.01C9.3807 22.01 7.0007 21 5.2207 19.36C5.4607 18.45 6.1107 17.62 7.0607 16.98C9.7907 15.16 14.2307 15.16 16.9407 16.98C17.9007 17.62 18.5407 18.45 18.7807 19.36Z" fill="#292D32"></path>
                                </g>
                            </svg>
                        </div>

                        <div id="dropdownProfile" class="hidden h-40 w-40 bg-neutral-900 absolute right-1 top-12 rounded-lg">
                            <div class="py-3 px-5 bg-neutral-100 rounded-t-lg dark:bg-neutral-900">
                                <!-- <p class="text-sm text-neutral-500 dark:text-neutral-500">Signed in as</p> -->
                                <p class="text-sm font-medium text-neutral-800 dark:text-neutral-200">' . $_SESSION['nama_akun'] . '</p>
                                <p class="text-sm font-medium text-neutral-800 dark:text-neutral-200">' . $_SESSION['email_akun'] . '</p>
                            </div>

                            <a class="flex items-center gap-x-3.5 py-2 mb-2 px-3 rounded-lg text-sm text-neutral-800 hover:bg-neutral-100 focus:outline-hidden focus:bg-neutral-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="./pages/user-pemesanan.php">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                        </svg>
                                Pemesanan <span class="text-xs">' . $jumlahPemesanan . '</span>
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 mb-2 px-3 rounded-lg text-sm text-neutral-800 hover:bg-neutral-100 focus:outline-hidden focus:bg-neutral-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="./controller/logout.php">
                                <svg viewBox="0 0 24 24" fill="none" height="15px" width="15px" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.2429 22 18.8286 22 16.0002 22H15.0002C12.1718 22 10.7576 22 9.87889 21.1213C9.11051 20.3529 9.01406 19.175 9.00195 17" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M15 12L2 12M2 12L5.5 9M2 12L5.5 15" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                Logout
                            </a>
                        </div>
                    </div>
                        ';
                        if ($_SESSION['role_akun'] == 'admin') {
                            echo '<a href="pages/admin.php" id="loginBtn" class="ml-3 text-neutral-800 dark:text-white hover:bg-neutral-50 focus:ring-4 focus:ring-neutral-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-[#990000] focus:outline-none dark:focus:ring-neutral-800">Admin</a>';
                        }
                    }
                    ?>


                    <!-- <a href="pages/admin.php" class="text-neutral-800 dark:text-white hover:bg-neutral-50 focus:ring-4 focus:ring-neutral-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-[#990000] focus:outline-none dark:focus:ring-neutral-800">Admin</a> -->
                </div>
                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-neutral-700 border-b border-neutral-100 hover:bg-neutral-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-neutral-400 lg:dark:hover:text-white dark:hover:bg-neutral-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-neutral-700" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#howToBook" class="block py-2 pl-3 pr-4 text-neutral-700 border-b border-neutral-100 hover:bg-neutral-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-neutral-400 lg:dark:hover:text-white dark:hover:bg-neutral-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-neutral-700">How To Book</a>
                        </li>
                        <li>
                            <a href="#lapangan" class="block py-2 pl-3 pr-4 text-neutral-700 border-b border-neutral-100 hover:bg-neutral-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-neutral-400 lg:dark:hover:text-white dark:hover:bg-neutral-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-neutral-700">Lapangan</a>
                        </li>
                        <li>
                            <a href="#testimoni" class="block py-2 pl-3 pr-4 text-neutral-700 border-b border-neutral-100 hover:bg-neutral-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-neutral-400 lg:dark:hover:text-white dark:hover:bg-neutral-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-neutral-700">Testimoni</a>
                        </li>
                        <li>
                            <a href="#booking" class="block py-2 pl-3 pr-4 text-neutral-700 border-b border-neutral-100 hover:bg-neutral-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-neutral-400 lg:dark:hover:text-white dark:hover:bg-neutral-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-neutral-700">Booking</a>
                        </li>
                        <li>
                            <a href="#faq" class="block py-2 pl-3 pr-4 text-neutral-700 border-b border-neutral-100 hover:bg-neutral-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-neutral-400 lg:dark:hover:text-white dark:hover:bg-neutral-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-neutral-700">FAQ</a>
                        </li>
                        <li>
                            <a href="#contact" class="block py-2 pl-3 pr-4 text-neutral-700 border-b border-neutral-100 hover:bg-neutral-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-neutral-400 lg:dark:hover:text-white dark:hover:bg-neutral-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-neutral-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Start block -->
    <section class="bg-white dark:bg-black relative">

        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-11 lg:pt-28">


            <div class="mr-auto mt-14 place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">#1 Badminton Field<br>In Town</h1>
                <p class="max-w-2xl mb-6 font-light text-neutral-500 lg:mb-8 md:text-lg lg:text-xl dark:text-neutral-400">Step into a world of speed, agility, and excitement at our professional-grade badminton court. Designed for both beginners and seasoned players</p>
                <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                    <a href="#booking" class="inline-flex items-center justify-center w-full px-10 py-3 text-sm font-medium text-center text-neutral-900 border border-neutral-200 rounded-lg sm:w-auto hover:bg-neutral-100 focus:ring-4 focus:ring-neutral-100 dark:text-white dark:border-[#414141] dark:hover:bg-[#990000] dark:hover:border-transparent dark:focus:ring-neutral-800 ">
                        Book Now
                    </a>

                    </a>
                </div>
            </div>
            <div class="hidden lg:mt-4 lg:col-span-4 lg:flex lg:mr-10">
                <img src="./assets/img/logos/logo.png" alt="hero image">
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-white dark:bg-black">
        <div class="max-w-screen-xl lg:pt-10 px-4 pb-8 mx-auto items-center justify-center lg:pb-32">
            <div class="grid grid-cols-2 lg:tracking-tight text-neutral-500 sm:gap-12 sm:grid-cols-3 lg:grid-cols-4 dark:text-neutral-400">
                <?php
                $qLapangan = $koneksi->query("SELECT * FROM lapangan");

                while ($lapangan = $qLapangan->fetch_assoc()) {
                    echo '
                        <a href="#lapangan" class="items-center lg:justify-center text-center dark:hover:text-white">
                            <h6 class="font-extrabold tracking-tight">Lapangan ' . $lapangan['nama_lapangan'] . '</h6>
                            <p class="text-sm">' . $lapangan['alamat'] . '</p>
                        </a>
                        ';
                }
                ?>
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-neutral-50 dark:bg-[#1a1a1a]" id="howToBook">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-36 lg:px-6">
            <!-- Row -->
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <div class="text-neutral-500 sm:text-lg dark:text-neutral-400">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-neutral-900 dark:text-white">Tata Cara Pemesanan</h2>
                    <p class="mb-8 font-light lg:text-xl">Tata Cara Pemesanan Gedung Badminton IronField</p>
                    <!-- List -->
                    <ul role="list" class="space-y-5 my-7">
                        <li class="flex space-x-2">
                            <span class="text-[#990000] font-extrabold text-xl -mt-1.5">1.</span>
                            <span class="text-base font-medium leading-tight text-neutral-900 dark:text-white">Memilih lapangan, tanggal, dan jadwal pemesanan gedung</span>
                        </li>
                        <li class="flex space-x-2">
                            <span class="text-[#990000] font-extrabold text-xl -mt-1.5">2.</span>
                            <span class="text-base font-medium leading-tight text-neutral-900 dark:text-white">Mengisi data pribadi</span>
                        </li>
                        <li class="flex space-x-2">
                            <span class="text-[#990000] font-extrabold text-xl -mt-1.5">3.</span>
                            <span class="text-base font-medium leading-tight text-neutral-900 dark:text-white">Melakukan pembayaran (QRIS)</span>
                        </li>
                        <li class="flex space-x-2">
                            <span class="text-[#990000] font-extrabold text-xl -mt-1.5">4.</span>
                            <span class="text-base font-medium leading-tight text-neutral-900 dark:text-white">Konfirmasi Ke Admin</span>
                        </li>
                    </ul>
                    <ul class=" mb-8 font-light lg:text-sm">
                        <li class="flex space-x-2">
                            <p>-</p>
                            <p>Penyewaan gedung dilakukan dengan durasi 3 jam per sesi.</p>
                        </li>
                        <li class="flex space-x-2">
                            <p>-</p>
                            <p>Pembatalan pemesanan dapat dilakukan paling lambat 1 hari sebelum jadwal yang telah ditentukan. Biaya yang sudah dibayar tidak dapat dikembalikan untuk pembatalan mendadak.</p>
                        </li>
                    </ul>

                </div>
                <?php
                $qLapangan = $koneksi->query("SELECT * FROM lapangan");
                $jumlahLapangan = $qLapangan->num_rows;

                if ($jumlahLapangan > 1) {
                    $lapangan1 = $qLapangan->fetch_assoc();
                    $lapangan2 = $qLapangan->fetch_assoc();
                    echo '
    <div class="h-full w-full grid grid-rows-2 gap-y-4">
        <div class="grid grid-cols-[45%_55%] h-47">
            <div class="pr-3 overflow-hidden">
                <img src="./images/lapangan/' . $lapangan1['foto1'] . '" class="object-cover h-full w-full rounded-lg" alt="">
            </div>
            <div class="pl-3 overflow-hidden">
                <img src="./images/lapangan/' . $lapangan1['foto2'] . '" class="object-cover h-full w-full rounded-lg" alt="">
            </div>
        </div>
        <div class="grid grid-cols-[55%_45%] h-47">
            <div class="pr-3 overflow-hidden">
                <img src="./images/lapangan/' . $lapangan2['foto1'] . '" class="object-cover h-full w-full rounded-lg" alt="">
            </div>
            <div class="pl-3 overflow-hidden">
                <img src="./images/lapangan/' . $lapangan2['foto2'] . '" class="object-cover h-full w-full rounded-lg" alt="">
            </div>
        </div>
    </div>
    ';
                } else {
                    $lapangan = $qLapangan->fetch_assoc();
                    echo '
    <div class="h-96 w-full overflow-hidden rounded-lg">
        <img src="./images/lapangan/' . $lapangan['foto1'] . '" class="object-cover h-full w-full" alt="">
    </div>
    ';
                }
                ?>


                <!-- Row -->
            </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-white dark:bg-black" id="lapangan">
        <div class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
            <div class="col-span-2 mb-8">
                <p class="text-lg font-medium text-[#990000] dark:text-[#990000]">Professional Badminton Field</p>
                <h2 class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-neutral-900 md:text-3xl dark:text-white">Harga Kaki Lima, Kualitas Bintang Lima</h2>
                <p class="font-light text-neutral-500 sm:text-xl dark:text-neutral-400">Lapangan badminton profesional dengan standar Badminton World Federation, pencahayaan optimal, gedung yang bersih dan nyaman.</p>
                <div class="pt-6 mt-6 space-y-4 border-t border-neutral-200 dark:border-neutral-700">
                    <div>
                        <a href="#lapangan" class="inline-flex items-center text-base font-medium text-[#990000] hover:text-red-700 dark:text-[#990000] dark:hover:text-red-700">
                            <?php
                            $qLapangan = $koneksi->query("SELECT * FROM lapangan");

                            while ($lapangan = $qLapangan->fetch_assoc()) {
                                echo 'Lapangan "' . $lapangan['nama_lapangan'] . '" ' . $lapangan['alamat'];
                            }
                            ?>
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>

            <?php
            $qLapangan = $koneksi->query("SELECT * FROM lapangan");

            if ($qLapangan->num_rows > 1) {
                $lapangan1 = $qLapangan->fetch_assoc();
                $lapangan2 = $qLapangan->fetch_assoc();

                echo '
                <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                <!-- <div>
                    <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">99.99% uptime</h3>
                    <p class="font-light text-neutral-500 dark:text-neutral-400">For Landwind, with zero maintenance downtime</p>
                </div> -->


                <div id="controls-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-20 overflow-hidden rounded-lg md:h-96">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="./images/' . $lapangan1['foto1'] . '" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="./images/' . $lapangan1['foto2'] . '" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                    </div>
                    <div class="absolute text-left font-bold text-sm z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-26">
                        <p class="text-[#990000]">|</p>
                        <p>Lapangan "' . $lapangan1['nama_lapangan'] . '" ' . $lapangan1['alamat'] . '</p>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-neutral-800/30 group-hover:bg-white/50 dark:group-hover:bg-neutral-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-neutral-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-neutral-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-neutral-800/30 group-hover:bg-white/50 dark:group-hover:bg-neutral-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-neutral-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-neutral-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

                <div id="controls-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-20 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="./images/lapangan/' . $lapangan2['foto1'] . '" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="./images/lapangan/' . $lapangan2['foto2'] . '" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>

                    </div>
                    <div class="absolute text-left font-bold text-sm z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-26">
                        <p class="text-[#990000]">|</p>
                        <p>Lapangan "' . $lapangan2['nama_lapangan'] . '" ' . $lapangan2['alamat'] . '</p>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-neutral-800/30 group-hover:bg-white/50 dark:group-hover:bg-neutral-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-neutral-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-neutral-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-neutral-800/30 group-hover:bg-white/50 dark:group-hover:bg-neutral-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-neutral-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-neutral-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </div>
                ';
            } else {
                $lapangan = $qLapangan->fetch_assoc();
                echo '
                <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                <!-- <div>
                    <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">99.99% uptime</h3>
                    <p class="font-light text-neutral-500 dark:text-neutral-400">For Landwind, with zero maintenance downtime</p>
                </div> -->


                <div id="controls-carousel" class="relative w-140" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-20 overflow-hidden rounded-lg md:h-96">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="./images/lapangan/' . $lapangan['foto1'] . '" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="./images/lapangan/' . $lapangan['foto2'] . '" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                    </div>
                    <div class="absolute text-left font-bold text-sm z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-35">
                        <p class="text-[#990000]">|</p>
                        <p>Lapangan "' . $lapangan['nama_lapangan'] . '" ' . $lapangan['alamat'] . '</p>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-neutral-800/30 group-hover:bg-white/50 dark:group-hover:bg-neutral-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-neutral-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-neutral-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-neutral-800/30 group-hover:bg-white/50 dark:group-hover:bg-neutral-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-neutral-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-neutral-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

                

            </div>
                ';
            }
            ?>

        </div>
    </section>
    <!-- End block -->


    <section id="testimoni" class="relative w-full bg-neutral-50 dark:bg-[#1a1a1a]" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-20 lg:px-6">
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="h-12 mx-auto mb-3 text-neutral-400 dark:text-neutral-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                        </svg>
                        <blockquote>
                            <p class="text-xl font-medium text-neutral-900 md:text-2xl dark:text-white">"Landwind is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3">
                            <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                            <div class="flex items-center divide-x-2 divide-neutral-500 dark:divide-neutral-700">
                                <div class="pr-3 font-medium text-neutral-900 dark:text-white">Micheal Gough</div>
                                <div class="pl-3 text-sm font-light text-neutral-500 dark:text-neutral-400">CEO at Google</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-20 lg:px-6">
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="h-12 mx-auto mb-3 text-neutral-400 dark:text-neutral-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                        </svg>
                        <blockquote>
                            <p class="text-xl font-medium text-neutral-900 md:text-2xl dark:text-white">"2"</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3">
                            <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                            <div class="flex items-center divide-x-2 divide-neutral-500 dark:divide-neutral-700">
                                <div class="pr-3 font-medium text-neutral-900 dark:text-white">Micheal Gough</div>
                                <div class="pl-3 text-sm font-light text-neutral-500 dark:text-neutral-400">CEO at Google</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-black group-hover:bg-white/50 dark:group-hover:bg-[#990000] group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-[#1a1a1a] group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-[#1a1a1a] rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-black group-hover:bg-white/50 dark:group-hover:bg-[#990000] group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-[#1a1a1a] group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-[#1a1a1a] rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </section>

    <!-- End block -->
    <!-- Start block -->
    <section class="bg-white dark:bg-black" id="booking">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-6">
            <div class="max-w-screen-md mx-auto mb-8 text-center lg:mb-12">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-neutral-900 dark:text-white">Silahkan Pilih Waktu</h2>
                <p class="mb-5 font-light text-neutral-500 sm:text-xl dark:text-neutral-400">Silahkan isi form Reservasi berikut.
                    Setelah memilih jadwal, isi form dengan data yang benar.
                    Setelah mengisi form, Anda akan diarahkan untuk pembayaran menggunakan QRIS. Silahkan Lakukan Pembayaran.
                    Setelah Melakukan Pembayaran Silahkan Konfirmasi kepada Admin Gedung untuk memastikan jadwal Anda sesuai.</p>
            </div>

            <?php
            $qPaket = $koneksi->query("SELECT * FROM paket");
            $jumlahPaket = $qPaket->num_rows;

            $dataPaket = [];
            while ($row = $qPaket->fetch_assoc()) {
                $dataPaket[] = $row;
            }

            for ($i = 0; $i < $jumlahPaket; $i += 4) {
                echo '
                <div class="flex mb-3 items-center justify-center space-x-8">
                    ';
                for ($j = $i; $j < $i + 4 && $j < $jumlahPaket; $j++) {
                    $paket = $dataPaket[$j];
                    echo '
                        <!-- Pricing Card -->
                        <div class="flex flex-col max-w-lg p-6 text-center text-neutral-900 bg-white border border-neutral-100 rounded-lg shadow dark:border-[#414141] xl:p-8 dark:bg-[#1a1a1a] dark:text-white">
                            <h3 class="mb-4 text-2xl font-semibold">' . $paket['nama_paket'] . '</h3>
                            <p class="font-light text-neutral-500 sm:text-lg dark:text-neutral-400">' . substr($paket['jam_paket'], 0, 5) . ' WIB - ' . substr($paket['jam_paket'], 8, 5) . ' WIB</p>
                            <div class="flex items-baseline justify-center my-8">
                                <span class="mr-2 text-3xl font-extrabold">Rp' . number_format($paket['harga_paket'], 0, ',', '.') . '</span>
                            </div>
                            <!-- List -->
                            <ul role="list" class="mb-8 space-y-4 text-left">
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Toilet</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Parkiran Motor</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Area Istirahat</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Alas Lapangan Karpet
                                </li>
                            </ul>
                            <button id="openModal" type="button" class="hover:cursor-pointer book-button text-white bg-[#990000] hover:bg-red-700 focus:ring-4 focus:ring-red-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-red-700">Book Now</button>
                        </div>
                        ';
                }
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <!-- Modal Tambah Pemesanan -->
    <div id="addPemesananModal" class="fixed inset-0 bg-black/90 10 hidden justify-center items-center size-full top-0 start-0 z-80 overflow-x-hidden overflow-y-auto shadow-sm">
        <div class="flex justify-center items-center h-full text-white">
            <div class="bg-neutral-900 rounded-lg p-8 w-1/2 fade-in modal-content">
                <div class="flex mb-4 pb-3 border-b border-neutral-700 justify-between">
                    <h3 class="text-xl font-bold">Form Pemesanan</h3>
                    <button id="closeAddPemesananModal" class="bg-neutral-700 rounded-full p-2 hover:cursor-pointer">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <form id="formPemesanan" action="controller/pesan.php" method="POST">
                        <div class=" space-y-3">
                            <div class="grid grid-cols-2 space-x-3">
                                <div class="relative">
                                    <input type="hidden" name="id_akun">
                                    <label for="nama" class="text-white ml-4 text-sm dark:text-neutral-500">Nama Pemesan</label>
                                    <input type="text" disabled required class="peer py-2.5 sm:py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:dark:bg-neutral-800 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-white dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Masukkan nama" name="nama">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        <svg class="shrink-0 absolute top-9.5 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>


                                <input type="hidden" id="idPemesanan" name="idPemesanan">

                                <div class="relative">
                                    <label for="noHp" class="text-white ml-4 text-sm dark:text-neutral-500">Nomor HP</label>
                                    <div class="mt-.5"></div>
                                    <input required disabled type="text" id="no_hp" class="dark:disabled:bg-neutral-800 disabled:text-white peer py-2.5 sm:py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg sm:text-sm focus:border-neutral-700 focus:ring-neutral-700 disabled:pointer-events-none dark:bg-neutral-800 dark:border-transparent dark:text-white dark:placeholder-neutral-500 dark:focus:ring-neutral-700" placeholder="Masukkan nomor hp" name="no_hp">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        <svg class="dark:disabled:text-gray-500 shrink-0 size-5 mt-6 text-gray-500 dark:text-neutral-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M10.0376 5.31617L10.6866 6.4791C11.2723 7.52858 11.0372 8.90532 10.1147 9.8278C10.1147 9.8278 10.1147 9.8278 10.1147 9.8278C10.1146 9.82792 8.99588 10.9468 11.0245 12.9755C13.0525 15.0035 14.1714 13.8861 14.1722 13.8853C14.1722 13.8853 14.1722 13.8853 14.1722 13.8853C15.0947 12.9628 16.4714 12.7277 17.5209 13.3134L18.6838 13.9624C20.2686 14.8468 20.4557 17.0692 19.0628 18.4622C18.2258 19.2992 17.2004 19.9505 16.0669 19.9934C14.1588 20.0658 10.9183 19.5829 7.6677 16.3323C4.41713 13.0817 3.93421 9.84122 4.00655 7.93309C4.04952 6.7996 4.7008 5.77423 5.53781 4.93723C6.93076 3.54428 9.15317 3.73144 10.0376 5.31617Z" stroke="#6e6e6e" stroke-width="1.5" stroke-linecap="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>


                            <div class="grid grid-cols-2 space-x-3">
                                <div class="relative text-xl">
                                    <label for="lapangan" class="text-white ml-4 text-sm dark:text-neutral-500">Lapangan</label>
                                    <select id="inputLapangan" name="inputLapangan" class="py-3 mt-1.5 px-4 pe-9 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-neutral-700 focus:ring-neutral-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-transparent dark:text-white dark:focus:ring-neutral-600">
                                        <option selected="">Pilih Lapangan</option>
                                        <?php
                                        $a = $koneksi->query("SELECT * FROM lapangan");
                                        while ($lapangan = $a->fetch_assoc()) {
                                            echo '<option value="' . $lapangan['id_lapangan'] . '">' . $lapangan['nama_lapangan'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>


                                <div class="mt-1">
                                    <label for="paket" class="text-white ml-4 text-sm dark:text-neutral-500">Tanggal Pemesanan</label>
                                    <div class="relative mt-1.5 text-xl">
                                        <div class="datepicker-container">
                                            <div class="bg-neutral-800 rounded-lg border-2 border-transparent focus-within:border-neutral-700">
                                                <input type="text" name="inputTanggal" id="inputTanggal" required class="date-input ml-10 w-fit" placeholder="Pilih tanggal" />
                                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                                    <svg class="shrink-0 size-4 text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                                                        <line x1="16" x2="16" y1="2" y2="6" />
                                                        <line x1="8" x2="8" y1="2" y2="6" />
                                                        <line x1="3" x2="21" y1="10" y2="10" />
                                                        <path d="M8 14h.01" />
                                                        <path d="M12 14h.01" />
                                                        <path d="M16 14h.01" />
                                                        <path d="M8 18h.01" />
                                                        <path d="M12 18h.01" />
                                                        <path d="M16 18h.01" />
                                                    </svg>
                                                </div>
                                            </div>


                                            <div class="datepicker" hidden>
                                                <!-- .datepicker-header -->
                                                <div class="datepicker-header">
                                                    <button type="button" class="prev">Prev</button>

                                                    <div>
                                                        <select class="month-input">
                                                            <option>Januari</option>
                                                            <option>Februari</option>
                                                            <option>Maret</option>
                                                            <option>April</option>
                                                            <option>Mei</option>
                                                            <option>Juni</option>
                                                            <option>Juli</option>
                                                            <option>Agustus</option>
                                                            <option>September</option>
                                                            <option>October</option>
                                                            <option>November</option>
                                                            <option>Desember</option>
                                                        </select>
                                                        <input type="number" class="year-input px-1.5" min="1900" max="2100" />
                                                    </div>

                                                    <button type="button" class="next">Next</button>
                                                </div>
                                                <!-- /.datepicker-header -->

                                                <!-- .days -->
                                                <div class="days">
                                                    <span>Min</span>
                                                    <span>Sen</span>
                                                    <span>Sel</span>
                                                    <span>Rab</span>
                                                    <span>Kam</span>
                                                    <span>Jum</span>
                                                    <span>Sab</span>
                                                </div>
                                                <!-- /.days -->

                                                <!-- .dates -->
                                                <div class="dates"></div>
                                                <!-- /.dates -->
                                                <div class="text-xs text-white flex mb-3">
                                                    <p>
                                                        *<span class="ml-1 text-white bg-red-600 px-1 py-0.5 w-fit h-fit">Merah</span> berarti full
                                                    </p>
                                                </div>

                                                <!-- .datepicker-footer -->
                                                <div class="datepicker-footer">
                                                    <button type="button" class="cancel">Batal</button>
                                                    <button type="button" id="applyTanggal" class="apply" onclick="console.log('clicked')">Pilih</button>
                                                </div>
                                                <!-- /.datepicker-footer -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="pilihanPaket">
                                <div class="flex mt-1 space-x-3" id="paketList">

                                </div>
                            </div>
                            <input type="hidden" name="id_paket" id="id_paket">
                            <label for="disclaimer" class="text-white flex justify-end ml-4 text-sm dark:text-neutral-500">*Pastikan Nama Pemesan Terisi Dengan Benar</label>


                        </div>
                        <div class="flex mt-5 text-white text-sm justify-end items-center gap-x-2 py-3 px-4 border-t border-gray-200 dark:border-neutral-700">
                            <input type="reset" id="reset" value="Reset" class="bg-red-500 hover:bg-red-600 hover:cursor-pointer rounded-lg py-2 px-3">
                            <input type="submit" name="" id="" value="Tambah" class="bg-green-600 hover:bg-green-700 hover:cursor-pointer rounded-lg py-2 px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- End block -->
    <!-- Start block -->
    <section class="bg-white dark:bg-black" id="faq">
        <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-60 lg:pt-32 lg:px-6 ">
            <h2 class="mb-6 text-3xl font-extrabold tracking-tight text-center text-neutral-900 lg:mb-8 lg:text-3xl dark:text-white">Frequently asked questions</h2>
            <div class="max-w-screen-md mx-auto">
                <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-[#1a1a1a] text-neutral-900 dark:text-white" data-inactive-classes="text-neutral-500 dark:text-neutral-400">
                    <h3 id="accordion-flush-heading-1">
                        <button type="button" class="hover:cursor-pointer flex items-center justify-between w-full py-5 font-medium text-left text-[#1a1a1a] bg-white border-b border-neutral-200 dark:border-[#1a1a1a] dark:bg-[#1a1a1a] dark:text-white" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                            <span>Ada penyewaan raket nya ngga?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-5 border-b border-neutral-200 dark:border-[#1a1a1a]">
                            <p class="mb-2 text-neutral-500 dark:text-neutral-400">Ada, per 3 jam <span class="font-bold">Rp15.000.</span></p>
                            <p class="text-neutral-500 dark:text-neutral-400">Hubungi <a href="/pages" class="text-[#990000] dark:text-[#990000] hover:underline">Admin</a> untuk penyewaan.</p>
                        </div>
                    </div>
                    <h3 id="accordion-flush-heading-2">
                        <button type="button" class="hover:cursor-pointer flex items-center justify-between w-full py-5 font-medium text-left text-neutral-500 border-b border-neutral-200 dark:border-[#1a1a1a] dark:text-[#1a1a1a]" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                            <span>Apa bisa reschedule hari dan jam pemesanan?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="py-5 border-b border-neutral-200 dark:border-[#1a1a1a]">
                            <p class="mb-2 text-neutral-500 dark:text-neutral-400">Bisa jika jadwal yang dituju masih belum terpesan.</p>
                            <p class="text-neutral-500 dark:text-neutral-400">Hubungi <a href="#" class="text-[#990000] dark:text-[#990000] hover:underline">Admin</a> untuk lebih lanjut.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-neutral-50 dark:bg-[#1a1a1a]" id="contact">
        <div class="max-w-screen-xl px-4 pt-8 mx-auto lg:pt-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto text-center">
                <h2 class="mb-7 text-3xl font-extrabold leading-tight tracking-tight text-neutral-900 dark:text-white">Ada Kesulitan? Hubungi Admin</h2>
                <div class="flex space-x-3 justify-center mx-auto h-fit w-fit text-white bg-[#189D0E] hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-[#189D0E] dark:hover:bg-[#186912] focus:outline-none dark:focus:ring-purple-800">
                    <img src="./images/wa-putih.png" alt="" class="w-5 h-fit">
                    <a href="#" class=" ">IronField Badminton</a>
                </div>
            </div>
        </div>
    </section>


    <!-- End block -->
    <footer class="bg-white dark:bg-[#1a1a1a] lg:pb-6">
        <div class="max-w-screen-xl  mx-auto md:p-8">
            <div class="text-center">
                <ul class="flex justify-center space-x-5">
                    <li>
                        <a href="#" class="text-neutral-500 hover:text-neutral-900 dark:hover:text-white dark:text-neutral-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-neutral-500 hover:text-neutral-900 dark:hover:text-white dark:text-neutral-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-neutral-500 hover:text-neutral-900 dark:hover:text-white dark:text-neutral-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-neutral-500 hover:text-neutral-900 dark:hover:text-white dark:text-neutral-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                            </svg>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if (isset($_SESSION['isLogin']) || $_SESSION['isLogin'] === true): ?>
                const profile = document.getElementById('profileAkun');
                const dropdown = document.getElementById('dropdownProfile');

                profile.addEventListener('click', () => {
                    dropdown.classList.toggle('hidden');
                });

                document.getElementById('closeAddPemesananModal').addEventListener('click', () => {
                    document.getElementById('addPemesananModal').classList.add('hidden');
                });

                document.getElementById('inputLapangan').addEventListener('change', function() {
                    const id_lapangan = this.value;
                    console.log(id_lapangan);
                    const paketList = document.getElementById('paketList');
                    const labelPaket = document.getElementById('labelPaket');
                    paketList.innerHTML = "";
                    document.getElementById("id_paket").value = "";

                    if (!document.getElementById('labelPaket')) {
                        const label = document.createElement('labelPaket');
                        label.className = "text-white ml-4 text-sm dark:text-neutral-500";
                        label.textContent = "Paket"
                        label.id = "labelPaket"
                        paketList.innerHTML = "";
                        paketList.parentNode.insertBefore(label, paketList);
                    } else {
                        labelPaket.textContent = "Paket";
                    }
                    paketList.innerHTML = "";

                    fetch(`controller/get_paket.php?id_lapangan=${id_lapangan}`)
                        .then(response => response.json())
                        .then(data => {
                            const paketList = document.querySelectorAll("#paketList");
                            paketList.forEach(paketList => {
                                paketList.innerHTML = "";

                                if (!document.getElementById('labelPaket')) {
                                    const label = document.createElement('label');
                                    label.className = "text-white ml-4 text-sm dark:text-neutral-500";
                                    label.textContent = "Paket"
                                    label.id = "labelPaket"
                                    paketList.innerHTML = "";
                                    paketList.parentNode.insertBefore(label, paketList);
                                }


                                data.forEach(paket => {
                                    const div = document.createElement('div');
                                    div.className = "w-fit h-fit py-2 px-3 rounded-lg border bg-[#0a2008] hover:bg-[#237219] hover:cursor-pointer border-[#237219]";
                                    div.textContent = paket.nama_paket + " (" + paket.jam_paket + ")";
                                    div.dataset.idPaket = paket.id_paket;

                                    div.addEventListener("click", function() {
                                        const inputPaket = document.getElementById("id_paket");
                                        inputPaket.value = this.dataset.idPaket;

                                        document.querySelectorAll("#paketList div").forEach(d => {
                                            d.classList.remove("bg-[#237219]");
                                            d.classList.add("bg-[#0a2008]");
                                        });
                                        this.classList.remove("bg-[#0a2008]");
                                        this.classList.add("bg-[#237219]");

                                        if (inputPaket.value === "") {
                                            inputPaket.value = null;
                                        }

                                        console.log("id_paket terpilih:", inputPaket.value);
                                    });

                                    paketList.appendChild(div);
                                });

                            });
                        });
                });



                document.getElementById('inputTanggal').addEventListener('change', function() {
                    const tanggalSelected = this.value;
                    // console.log("tanggalSelected: ", tanggalSelected);

                    fetch(`controller/cek_slot.php?tanggal=${tanggalSelected}`)
                        .then(response => response.json())
                        .then(data => {
                            // console.log("Slot dari server:", data);
                            data.forEach(slot => {
                                document.querySelectorAll('#paketList div').forEach(p => {
                                    console.log("Cek div dengan id_paket =", p.dataset.idPaket, "vs", slot.id_paket);
                                    if (p.dataset.idPaket == slot.id_paket) {
                                        p.classList.remove("bg-[#0a2008]", "hover:bg-[#237219]", "border", "hover:cursor-pointer");
                                        p.classList.add("bg-neutral-700");
                                        p.style.pointerEvents = "none";
                                    }
                                });
                            });


                        });
                });
            <?php endif; ?>

            document.querySelectorAll('#openModal').forEach((btn) => {
                btn.addEventListener('click', () => {
                    <?php if (!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] !== true): ?>
                        window.location.href = "login.php";
                    <?php else: ?>
                        const nama = "<?= $_SESSION['nama_akun'] ?>";
                        const noHp = "<?= '0' . substr($_SESSION['no_hp_akun'], 2) ?>";
                        const idAkun = "<?= $_SESSION['id_akun'] ?>";
                        document.querySelector('input[name="id_akun"]').value = idAkun;
                        document.querySelector('input[name="nama"]').value = nama;
                        document.querySelector('input[name="no_hp"]').value = noHp;
                        document.getElementById('addPemesananModal').classList.remove('hidden');
                    <?php endif; ?>
                })
            })
        })
    </script>
</body>