<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
ob_start();
$tambah = isset($_GET['tambah']) ? htmlentities($_GET['tambah']) : '';
$hapus = isset($_GET['hapus']) ? htmlentities($_GET['hapus']) : '';
$update = isset($_GET['update']) ? htmlentities($_GET['update']) : '';
$approve = isset($_GET['approval']) ? htmlentities($_GET['approval']) : '';
?>

<!-- ========== HEADER ========== -->
<header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-48 w-full bg-white text-sm py-2.5 lg:ps-65 dark:bg-neutral-900 dark:border-neutral-700">
    <nav class="px-4 sm:px-6 flex basis-full items-center w-full mx-auto ">
        <div class="me-5 lg:me-0 lg:hidden flex items-center">
            <!-- Logo -->
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80" href="#" aria-label="Preline">
                <svg class="w-28 h-auto" width="116" height="32" viewBox="0 0 116 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M33.5696 30.8182V11.3182H37.4474V13.7003H37.6229C37.7952 13.3187 38.0445 12.9309 38.3707 12.5369C38.7031 12.1368 39.134 11.8045 39.6634 11.5398C40.1989 11.2689 40.8636 11.1335 41.6577 11.1335C42.6918 11.1335 43.6458 11.4044 44.5199 11.946C45.3939 12.4815 46.0926 13.291 46.6158 14.3743C47.139 15.4515 47.4006 16.8026 47.4006 18.4276C47.4006 20.0095 47.1451 21.3452 46.6342 22.4347C46.1295 23.518 45.4401 24.3397 44.5661 24.8999C43.6982 25.4538 42.7256 25.7308 41.6484 25.7308C40.8852 25.7308 40.2358 25.6046 39.7003 25.3523C39.1709 25.0999 38.737 24.7829 38.3984 24.4013C38.0599 24.0135 37.8014 23.6226 37.6229 23.2287H37.5028V30.8182H33.5696ZM37.4197 18.4091C37.4197 19.2524 37.5367 19.9879 37.7706 20.6158C38.0045 21.2436 38.343 21.733 38.7862 22.0838C39.2294 22.4285 39.768 22.6009 40.402 22.6009C41.0421 22.6009 41.5838 22.4254 42.027 22.0746C42.4702 21.7176 42.8056 21.2251 43.0334 20.5973C43.2673 19.9633 43.3842 19.2339 43.3842 18.4091C43.3842 17.5904 43.2704 16.8703 43.0426 16.2486C42.8149 15.6269 42.4794 15.1406 42.0362 14.7898C41.593 14.4389 41.0483 14.2635 40.402 14.2635C39.7618 14.2635 39.2202 14.4328 38.777 14.7713C38.34 15.1098 38.0045 15.59 37.7706 16.2116C37.5367 16.8333 37.4197 17.5658 37.4197 18.4091ZM49.2427 25.5V11.3182H53.0559V13.7926H53.2037C53.4622 12.9124 53.8961 12.2476 54.5055 11.7983C55.1149 11.3428 55.8166 11.1151 56.6106 11.1151C56.8076 11.1151 57.02 11.1274 57.2477 11.152C57.4754 11.1766 57.6755 11.2105 57.8478 11.2536V14.7436C57.6632 14.6882 57.4077 14.639 57.0815 14.5959C56.7553 14.5528 56.4567 14.5312 56.1859 14.5312C55.6073 14.5312 55.0903 14.6574 54.6348 14.9098C54.1854 15.156 53.8284 15.5007 53.5638 15.9439C53.3052 16.3871 53.176 16.898 53.176 17.4766V25.5H49.2427ZM64.9043 25.777C63.4455 25.777 62.1898 25.4815 61.1373 24.8906C60.0909 24.2936 59.2845 23.4503 58.7182 22.3608C58.1519 21.2652 57.8688 19.9695 57.8688 18.4737C57.8688 17.0149 58.1519 15.7346 58.7182 14.6328C59.2845 13.531 60.0816 12.6723 61.1096 12.0568C62.1437 11.4413 63.3563 11.1335 64.7474 11.1335C65.683 11.1335 66.5539 11.2843 67.3603 11.5859C68.1728 11.8814 68.8806 12.3277 69.4839 12.9247C70.0932 13.5218 70.5672 14.2727 70.9057 15.1776C71.2443 16.0762 71.4135 17.1288 71.4135 18.3352V19.4155H59.4384V16.978H67.7111C67.7111 16.4117 67.588 15.91 67.3418 15.473C67.0956 15.036 66.754 14.6944 66.317 14.4482C65.8861 14.1958 65.3844 14.0696 64.812 14.0696C64.2149 14.0696 63.6856 14.2081 63.2239 14.4851C62.7684 14.7559 62.4114 15.1222 62.1529 15.5838C61.8944 16.0393 61.762 16.5471 61.7559 17.1072V19.4247C61.7559 20.1264 61.8851 20.7327 62.1437 21.2436C62.4083 21.7545 62.7807 22.1484 63.2608 22.4254C63.741 22.7024 64.3103 22.8409 64.9689 22.8409C65.406 22.8409 65.8061 22.7794 66.1692 22.6562C66.5324 22.5331 66.8432 22.3485 67.1018 22.1023C67.3603 21.8561 67.5572 21.5545 67.6927 21.1974L71.3304 21.4375C71.1458 22.3116 70.7672 23.0748 70.1948 23.7273C69.6285 24.3736 68.896 24.8783 67.9974 25.2415C67.1048 25.5985 66.0738 25.777 64.9043 25.777ZM77.1335 6.59091V25.5H73.2003V6.59091H77.1335ZM79.5043 25.5V11.3182H83.4375V25.5H79.5043ZM81.4801 9.49006C80.8954 9.49006 80.3937 9.29616 79.9752 8.90838C79.5628 8.51444 79.3566 8.04356 79.3566 7.49574C79.3566 6.95407 79.5628 6.48935 79.9752 6.10156C80.3937 5.70762 80.8954 5.51065 81.4801 5.51065C82.0649 5.51065 82.5635 5.70762 82.9759 6.10156C83.3944 6.48935 83.6037 6.95407 83.6037 7.49574C83.6037 8.04356 83.3944 8.51444 82.9759 8.90838C82.5635 9.29616 82.0649 9.49006 81.4801 9.49006ZM89.7415 17.3011V25.5H85.8083V11.3182H89.5569V13.8203H89.723C90.037 12.9955 90.5632 12.343 91.3019 11.8629C92.0405 11.3767 92.9361 11.1335 93.9887 11.1335C94.9735 11.1335 95.8322 11.349 96.5647 11.7798C97.2971 12.2107 97.8665 12.8262 98.2728 13.6264C98.679 14.4205 98.8821 15.3684 98.8821 16.4702V25.5H94.9489V17.1719C94.9551 16.304 94.7335 15.6269 94.2841 15.1406C93.8348 14.6482 93.2162 14.402 92.4283 14.402C91.8989 14.402 91.4311 14.5159 91.0249 14.7436C90.6248 14.9714 90.3109 15.3037 90.0831 15.7408C89.8615 16.1716 89.7477 16.6918 89.7415 17.3011ZM107.665 25.777C106.206 25.777 104.951 25.4815 103.898 24.8906C102.852 24.2936 102.045 23.4503 101.479 22.3608C100.913 21.2652 100.63 19.9695 100.63 18.4737C100.63 17.0149 100.913 15.7346 101.479 14.6328C102.045 13.531 102.842 12.6723 103.87 12.0568C104.905 11.4413 106.117 11.1335 107.508 11.1335C108.444 11.1335 109.315 11.2843 110.121 11.5859C110.934 11.8814 111.641 12.3277 112.245 12.9247C112.854 13.5218 113.328 14.2727 113.667 15.1776C114.005 16.0762 114.174 17.1288 114.174 18.3352V19.4155H102.199V16.978H110.472C110.472 16.4117 110.349 15.91 110.103 15.473C109.856 15.036 109.515 14.6944 109.078 14.4482C108.647 14.1958 108.145 14.0696 107.573 14.0696C106.976 14.0696 106.446 14.2081 105.985 14.4851C105.529 14.7559 105.172 15.1222 104.914 15.5838C104.655 16.0393 104.523 16.5471 104.517 17.1072V19.4247C104.517 20.1264 104.646 20.7327 104.905 21.2436C105.169 21.7545 105.542 22.1484 106.022 22.4254C106.502 22.7024 107.071 22.8409 107.73 22.8409C108.167 22.8409 108.567 22.7794 108.93 22.6562C109.293 22.5331 109.604 22.3485 109.863 22.1023C110.121 21.8561 110.318 21.5545 110.454 21.1974L114.091 21.4375C113.907 22.3116 113.528 23.0748 112.956 23.7273C112.389 24.3736 111.657 24.8783 110.758 25.2415C109.866 25.5985 108.835 25.777 107.665 25.777Z" class="fill-blue-600 dark:fill-white" fill="currentColor" />
                    <path d="M1 29.5V16.5C1 9.87258 6.37258 4.5 13 4.5C19.6274 4.5 25 9.87258 25 16.5C25 23.1274 19.6274 28.5 13 28.5H12" class="stroke-blue-600 dark:stroke-white" stroke="currentColor" stroke-width="2" />
                    <path d="M5 29.5V16.66C5 12.1534 8.58172 8.5 13 8.5C17.4183 8.5 21 12.1534 21 16.66C21 21.1666 17.4183 24.82 13 24.82H12" class="stroke-blue-600 dark:stroke-white" stroke="currentColor" stroke-width="2" />
                    <circle cx="13" cy="16.5214" r="5" class="fill-blue-600 dark:fill-white" fill="currentColor" />
                </svg>
            </a>
            <!-- End Logo -->
        </div>

        <div class="w-full flex items-center justify-end ms-auto md:justify-between gap-x-1 md:gap-x-3">

            <div class="hidden md:block">
                <!-- Search Input -->
                <div class="relative">
                    <div class="text-xl text-white pt-3">Dashboard</div>
                </div>
                <!-- End Search Input -->
            </div>

            <div class="flex flex-row items-center justify-end gap-1">
                <div class="hs-dropdown [--placement:bottom-right] relative inline-flex justify-center">
                    <button type="button" class="size-9.5 relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                        </svg>
                        <?php
                        $qNotif = $koneksi->query("SELECT COUNT(*) AS jumlah FROM pemesanan WHERE status_pemesanan='pending'");
                        $jumlah = $qNotif->fetch_assoc()['jumlah'];

                        if ($jumlah > 0) {
                            echo '
                            <div class="bg-red-700 w-2 h-2 rounded-full absolute left-1.5 bottom-1"></div>
                            ';
                        }
                        ?>
                    </button>

                    <?php
                    if ($jumlah > 0) {
                        echo '
                        <div class="hs-dropdown-menu pt-2 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden max-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
                        <a class="flex justify-center items-center gap-x-3.5 px-5 py-2 mb-2 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="../pages/admin-pemesanan.php">
                            <!-- <p class="text-sm text-gray-500 dark:text-neutral-500">Signed in as</p> -->
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                            <p class="text-sm font-bold text-gray-800 dark:text-neutral-200">' . $jumlah . '<span class="font-thin"> Pesanan Baru</span></p>
                        </a>
                    </div>
                        ';
                    }
                    ?>
                </div>

                <!-- Dropdown -->
                <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                    <button id="hs-dropdown-account" type="button" class="size-9.5 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none dark:text-white" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path opacity="0.4" d="M12 22.01C17.5228 22.01 22 17.5329 22 12.01C22 6.48716 17.5228 2.01001 12 2.01001C6.47715 2.01001 2 6.48716 2 12.01C2 17.5329 6.47715 22.01 12 22.01Z" fill="#292D32"></path>
                                <path d="M12 6.93994C9.93 6.93994 8.25 8.61994 8.25 10.6899C8.25 12.7199 9.84 14.3699 11.95 14.4299C11.98 14.4299 12.02 14.4299 12.04 14.4299C12.06 14.4299 12.09 14.4299 12.11 14.4299C12.12 14.4299 12.13 14.4299 12.13 14.4299C14.15 14.3599 15.74 12.7199 15.75 10.6899C15.75 8.61994 14.07 6.93994 12 6.93994Z" fill="#292D32"></path>
                                <path d="M18.7807 19.36C17.0007 21 14.6207 22.01 12.0007 22.01C9.3807 22.01 7.0007 21 5.2207 19.36C5.4607 18.45 6.1107 17.62 7.0607 16.98C9.7907 15.16 14.2307 15.16 16.9407 16.98C17.9007 17.62 18.5407 18.45 18.7807 19.36Z" fill="#292D32"></path>
                            </g>
                        </svg>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
                        <div class="py-3 px-5 bg-gray-100 rounded-t-lg dark:bg-neutral-800">
                            <!-- <p class="text-sm text-gray-500 dark:text-neutral-500">Signed in as</p> -->
                            <p class="text-sm font-medium text-gray-800 dark:text-neutral-200"><?= $_SESSION['nama_akun'] ?></p>
                            <p class="text-sm font-medium text-gray-800 dark:text-neutral-200"><?= $_SESSION['email_akun'] ?></p>
                        </div>

                        <a class="flex items-center gap-x-3.5 py-2 mb-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="../controller/logout.php">
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
            </div>
            <!-- End Dropdown -->
        </div>
        </div>
    </nav>
</header>
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<!-- Breadcrumb -->
<div class="sticky top-0 inset-x-0 z-20 bg-white border-y border-gray-200 px-4 sm:px-6 lg:px-8 lg:hidden dark:bg-neutral-800 dark:border-neutral-700">
    <div class="flex items-center py-2">
        <!-- Navigation Toggle -->
        <button type="button" class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-hidden focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
            <span class="sr-only">Toggle Navigation</span>
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="18" height="18" x="3" y="3" rx="2" />
                <path d="M15 3v18" />
                <path d="m8 9 3 3-3 3" />
            </svg>
        </button>
        <!-- End Navigation Toggle -->

        <!-- Breadcrumb -->
        <ol class="ms-3 flex items-center whitespace-nowrap">
            <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
                Application Layout
                <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </li>
            <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
                Dashboard
            </li>
        </ol>
        <!-- End Breadcrumb -->
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Sidebar -->
<div id="hs-application-sidebar" class="hs-overlay  [--auto-close:lg]
    hs-overlay-open:translate-x-0
    -translate-x-full transition-all duration-300 transform
    w-65 h-full
    hidden
    fixed inset-y-0 start-0 z-60
    bg-[#1a1a1a] 
    lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
    dark:bg-black " role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative h-full max-h-full">
        <div class="px-6 pt-4 items-center mt-4">
            <!-- Logo -->
            <a class="rounded-xl text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80" href="../" aria-label="Preline">
                <img src="../assets/img/logos/logo2.png" alt="" class="w-36 ">
            </a>
            <!-- End Logo -->
        </div>

        <!-- Content -->
        <div class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
            <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="flex flex-col space-y-1">
                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-white" href="#">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>
                            Dashboard
                        </a>
                    </li>



                    <li>
                        <a href="admin-akun.php" class="hover:cursor-pointer w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200">
                            <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="18" cy="15" r="3" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                                <path d="m21.7 16.4-.9-.3" />
                                <path d="m15.2 13.9-.9-.3" />
                                <path d="m16.6 18.7.3-.9" />
                                <path d="m19.1 12.2.3-.9" />
                                <path d="m19.6 18.7-.4-1" />
                                <path d="m16.8 12.3-.4-1" />
                                <path d="m14.3 16.6 1-.4" />
                                <path d="m20.7 13.8 1-.4" />
                            </svg>
                            Akun
                        </a>


                    </li>



                    <li>
                        <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200" href="admin-lapangan.php">
                            <svg fill="#ffffff" width="16" height="16" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 480 480" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <path d="M432,0H320h-32h-96h-32H48c-4.416,0-8,3.584-8,8v464c0,4.416,3.584,8,8,8h112h32h96h32h112c4.416,0,8-3.584,8-8V8 C440,3.584,436.416,0,432,0z M200,16h80v24h-80V16z M168,16h16v32c0,4.416,3.584,8,8,8h96c4.416,0,8-3.584,8-8V16h16v80H168V16z M267.112,112c-5.544,4.496-15.336,8-27.112,8s-21.568-3.504-27.112-8H267.112z M56,16h31.192C84,31.648,71.648,44,56,47.192V16z M56,464v-31.192C71.648,436,84,448.352,87.192,464H56z M280,464h-80v-24h80V464z M312,464h-16v-32c0-4.416-3.584-8-8-8h-96 c-4.416,0-8,3.584-8,8v32h-16v-80h144V464z M212.888,368c5.544-4.496,15.336-8,27.112-8s21.568,3.504,27.112,8H212.888z M424,464 h-31.192C396,448.352,408.352,436,424,432.808V464z M424,416.64c-24.472,3.52-43.84,22.888-47.36,47.36H328v-88 c0-4.416-3.584-8-8-8h-33.512c-5.208-13.944-23.736-24-46.488-24s-41.28,10.056-46.488,24H160c-4.416,0-8,3.584-8,8v88h-48.64 c-3.528-24.472-22.888-43.84-47.36-47.36V248h128.64c3.904,27.096,27.208,48,55.36,48c28.152,0,51.456-20.904,55.36-48H424V416.64 z M279.192,248c-3.72,18.232-19.872,32-39.192,32s-35.472-13.768-39.192-32H279.192z M200.808,232 c3.72-18.232,19.872-32,39.192-32s35.472,13.768,39.192,32H200.808z M424,232H295.36c-3.904-27.096-27.208-48-55.36-48 s-51.456,20.904-55.36,48H56V63.36C80.472,59.84,99.84,40.472,103.36,16H152v88c0,4.416,3.584,8,8,8h33.512 c5.208,13.944,23.736,24,46.488,24s41.28-10.056,46.488-24H320c4.416,0,8-3.584,8-8V16h48.64 c3.52,24.472,22.888,43.84,47.36,47.36V232z M424,47.192C408.352,44,396,31.648,392.808,16H424V47.192z"></path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="232" y="72" width="16" height="8"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="232" y="400" width="16" height="8"></rect>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            Lapangan
                        </a>
                    </li>

                    <li><a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200" href="admin-paket.php">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                            Paket
                        </a></li>
                    <li><a href="admin-pemesanan.php" class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200" href="#">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                            Pemesanan
                        </a></li>
                </ul>
            </nav>
        </div>
        <!-- End Content -->
    </div>
</div>
<!-- End Sidebar -->

<!-- Content -->
<div class="w-full lg:ps-64">
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
        <?php
        if ($approve === 'approved') {
            echo '<div id="dismiss-alert" class="hs-removing:translate-x-5 mx-5 hs-removing:opacity-0 transition duration-300 bg-teal-50 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500" role="alert" tabindex="-1" aria-labelledby="hs-dismiss-button-label">
                <div class="flex">
                    <div class="shrink-0">
                        <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                    </div>
                    <div class="ms-2">
                        <h3 id="hs-dismiss-button-label" class="text-sm font-medium">
                            Pemesanan approved
                        </h3>
                    </div>
                    <div class="ps-3 ms-auto">
                        <div class="-mx-1.5 -my-1.5">
                            <button type="button" class="inline-flex bg-teal-50 rounded-lg p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-hidden focus:bg-teal-100 dark:bg-transparent dark:text-teal-600 dark:hover:bg-teal-800/50 dark:focus:bg-teal-800/50" data-hs-remove-element="#dismiss-alert">
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
        } else if ($approve === 'rejected') {
            echo '<div id="dismiss-alert" class="hs-removing:translate-x-5 mx-5 hs-removing:opacity-0 transition duration-300 bg-teal-50 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500" role="alert" tabindex="-1" aria-labelledby="hs-dismiss-button-label">
                <div class="flex">
                    <div class="shrink-0">
                        <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                    </div>
                    <div class="ms-2">
                        <h3 id="hs-dismiss-button-label" class="text-sm font-medium">
                            Pemesanan rejected
                        </h3>
                    </div>
                    <div class="ps-3 ms-auto">
                        <div class="-mx-1.5 -my-1.5">
                            <button type="button" class="inline-flex bg-teal-50 rounded-lg p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-hidden focus:bg-teal-100 dark:bg-transparent dark:text-teal-600 dark:hover:bg-teal-800/50 dark:focus:bg-teal-800/50" data-hs-remove-element="#dismiss-alert">
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
        <h1 class="text-2xl text-white">Pemesanan Hari Ini
            <span class="font-bold">( <?php
                                        date_default_timezone_set("Asia/Jakarta");
                                        $now = date("d-m-Y");
                                        echo  $now;
                                        ?>
                )</span>
        </h1>
        <!-- Grid -->
        <?php
        $qapprove = $koneksi->query("SELECT * FROM pemesanan p JOIN paket pk ON p.id_paket=pk.id_paket WHERE p.status_pemesanan='approved' AND p.tanggal_pemesanan='$now' ORDER BY pk.jam_paket");
        echo '
        <div class="grid sm:grid-cols-2 lg:grid-cols-'.$qapprove->num_rows.' gap-4 sm:gap-6">
        ';
        while ($dataApproval = $qapprove->fetch_assoc()) {
            $qNamaAkun = $koneksi->query("SELECT * FROM akun WHERE id_akun='" . $dataApproval['id_akun'] . "'");
            $akun = $qNamaAkun->fetch_assoc();
            $noRaw = $akun['no_hp'];
            $noHp = '0' . substr($noRaw, 2);
            $qNamaLapangan = $koneksi->query("SELECT * FROM lapangan WHERE id_lapangan='" . $dataApproval['id_lapangan'] . "'");
            $lapangan = $qNamaLapangan->fetch_assoc();
            $qPaket = $koneksi->query("SELECT * FROM paket WHERE id_paket='" . $dataApproval['id_paket'] . "'");
            $paket = $qPaket->fetch_assoc();

            echo '
                <div class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-sm text-gray-500 dark:text-neutral-500">
                           ' . $lapangan['nama_lapangan'] . ' | ' . $paket['nama_paket'] . ' | ' . $paket['jam_paket'] . '
                        </p>
                    </div>

                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                            ' . $akun['nama'] . '
                        </h3>
                    </div>
                </div>
            </div>
                ';
        }
        ?>
        <!-- Card -->

        <!-- End Card -->


        <!-- End Card -->
    </div>
    <!-- End Grid -->

    <?php
    $qapprove = $koneksi->query("SELECT * FROM pemesanan WHERE status_pemesanan='pending'");
    while ($dataApproval = $qapprove->fetch_assoc()) {
        $qNamaAkun = $koneksi->query("SELECT * FROM akun WHERE id_akun='" . $dataApproval['id_akun'] . "'");
        $akun = $qNamaAkun->fetch_assoc();
        $noRaw = $akun['no_hp'];
        $noHp = '0' . substr($noRaw, 2);
        $qNamaLapangan = $koneksi->query("SELECT * FROM lapangan WHERE id_lapangan='" . $dataApproval['id_lapangan'] . "'");
        $lapangan = $qNamaLapangan->fetch_assoc();
        $qPaket = $koneksi->query("SELECT * FROM paket WHERE id_paket='" . $dataApproval['id_paket'] . "'");
        $paket = $qPaket->fetch_assoc();

        echo '<div class="flex flex-col border border-yellow-200 shadow-2xs rounded-xl dark:bg-yellow-500/10 dark:border-yellow-500/20">
                            <div class="p-4 md:p-5">
                                <div class="flex flex-col md:flex-row md:flex-wrap items-start md:items-center gap-10 text-white">';
        echo '<div class="flex items-center gap-5">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 5C22 6.65685 20.6569 8 19 8C17.3431 8 16 6.65685 16 5C16 3.34315 17.3431 2 19 2C20.6569 2 22 3.34315 22 5Z" fill="#ffd500" />
                                <path opacity="0.5"
                                    d="M15.612 2.03826C14.59 2 13.3988 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 10.6012 22 9.41 21.9617 8.38802C21.1703 9.08042 20.1342 9.5 19 9.5C16.5147 9.5 14.5 7.48528 14.5 5C14.5 3.86584 14.9196 2.82967 15.612 2.03826Z"
                                    fill="#ffd500" />
                                <path
                                    d="M3.46451 20.5355C4.92902 22 7.28611 22 12.0003 22C16.7145 22 19.0716 22 20.5361 20.5355C21.8931 19.1785 21.9927 17.0551 22 13H18.8402C17.935 13 17.4824 13 17.0846 13.183C16.6868 13.3659 16.3922 13.7096 15.8031 14.3968L15.1977 15.1032C14.6086 15.7904 14.314 16.1341 13.9162 16.317C13.5183 16.5 13.0658 16.5 12.1606 16.5H11.84C10.9348 16.5 10.4822 16.5 10.0844 16.317C9.68655 16.1341 9.392 15.7904 8.80291 15.1032L8.19747 14.3968C7.60837 13.7096 7.31382 13.3659 6.91599 13.183C6.51815 13 6.06555 13 5.16035 13H2C2.0073 17.0551 2.10744 19.1785 3.46451 20.5355Z"
                                    fill="#ffd500" />
                            </svg>
                            <div>
                                <h3 class="font-bold">' . $akun['nama'] . '</h3>
                                <h4>' . $lapangan['nama_lapangan'] . '</h4>
                            </div>
                        </div>';

        echo ' <!-- Tanggal -->
                        <div class="flex items-center bg-blue-800 rounded px-5 py-2 w-fit h-fit">
                            <svg class="mr-2" width="18" height="18" fill="none" viewBox="0 0 24 24">
                                <path d="M6.96 2c.418 0 .756.31.756.692v1.397c.671-.012 1.423-.012 2.269-.012h4.032c.846 0 1.598 0 2.269.012V2.692c0-.383.338-.692.756-.692.418 0 .756.31.756.692v1.458c1.451.106 2.403.367 3.103 1.008.7.641.985 1.513 1.101 2.842V9H2V8c.116-1.329.401-2.201 1.101-2.842.7-.641 1.652-.902 3.103-1.008V2.692c0-.383.338-.692.756-.692z"
                                    fill="#fff" />
                                <path opacity="0.5"
                                    d="M22 14v-2c0-.839-.013-2.335-.026-3H2.006C1.993 9.665 2.006 11.161 2.006 12v2c0 3.771 0 5.657 1.171 6.828C4.348 22 6.233 22 10.003 22h4c3.77 0 5.656 0 6.828-1.172C22 19.657 22 17.771 22 14z"
                                    fill="#fff" />
                                <path d="M18 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" fill="#fff" />
                            </svg>
                            ' . $dataApproval['tanggal_pemesanan'] . '
                        </div>';

        echo ' <!-- Jam -->
                        <div class="flex items-center bg-blue-700/10 pr-10 border border-blue-700 rounded px-2 py-2 w-fit h-fit">
                            <svg class="mr-2" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.5"
                                    d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                                    fill="#fff" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 7.25a.75.75 0 01.75.75v3.689l2.28 2.28a.75.75 0 01-1.06 1.061l-2.5-2.5a.75.75 0 01-.22-.53V8a.75.75 0 01.75-.75z"
                                    fill="#fff" />
                            </svg>
                            ' . $paket['jam_paket'] . '
                        </div>';

        echo '<div class=" flex items-center space-x-3 border border-green-900 bg-green-900/20 rounded w-fit h-fit px-3 py-2">
                <h4 class="">' . $noHp . '</h4>
                <div class="relative inline-block group">
                <a target="blank" href="https://api.whatsapp.com/send?phone=' . $akun['no_hp'] . '&text=Halo%20kak%20' . $akun['nama'] . '%2C%20kami%20dari%20IronField%20Badminton.%20Ingin%20mengkonfirmasi%20untuk%20pemesanan%20lapangan%20' . $lapangan['nama_lapangan'] . '%20tanggal%20' . $dataApproval['tanggal_pemesanan'] . '%20pukul%20' . $paket['jam_paket'] . '%20sudah%20di%20approved%20ya.%20Selamat%20Berolahraga." class="bg-[#0d3008] border border-[#237219] p-0.5 rounded-full flex justify-center items-center hover:cursor-pointer">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12C19.7614 12 22 9.76142 22 7C22 4.23858 19.7614 2 17 2C14.2386 2 12 4.23858 12 7C12 7.79984 12.1878 8.55582 12.5217 9.22624C12.6105 9.4044 12.64 9.60803 12.5886 9.80031L12.2908 10.9133C12.1615 11.3965 12.6035 11.8385 13.0867 11.7092L14.1997 11.4114C14.392 11.36 14.5956 11.3895 14.7738 11.4783C15.4442 11.8122 16.2002 12 17 12Z" fill="#129900"></path>
                        <path opacity="0.5" d="M8.03759 7.31617L8.6866 8.4791C9.2723 9.52858 9.03718 10.9053 8.11471 11.8278C8.11459 11.8279 6.99588 12.9468 9.02451 14.9755C11.0525 17.0035 12.1714 15.8861 12.1722 15.8853C13.0947 14.9628 14.4714 14.7277 15.5209 15.3134L16.6838 15.9624C18.2686 16.8468 18.4557 19.0692 17.0628 20.4622C16.2258 21.2992 15.2004 21.9505 14.0669 21.9934C12.1588 22.0658 8.91828 21.5829 5.6677 18.3323C2.41713 15.0817 1.93421 11.8412 2.00655 9.93309C2.04952 8.7996 2.7008 7.77423 3.53781 6.93723C4.93076 5.54428 7.15317 5.73144 8.03759 7.31617Z" fill="#129900"></path>
                    </svg>
                </a>
                <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block bg-gray-900 text-white text-xs px-2 py-1 rounded z-10 whitespace-nowrap">
                    Hubungi pemesan
                </span>
            </div>
                </div>';

        echo ' ';

        echo '<!-- Tombol Approve dan Tolak -->
                    <div class="flex gap-2 mt-3 md:mt-0 ml-auto flex-wrap">
                        <a href="../controller/approvalPemesananDashboard.php?status=rejected&idPemesanan=' . $dataApproval['id_pemesanan'] . '" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24">
                                <path fill="#fff" fill-rule="evenodd"
                                    d="M17.53 6.47a.75.75 0 0 1 0 1.06L13.06 12l4.47 4.47a.75.75 0 0 1-1.06 1.06L12 13.06l-4.47 4.47a.75.75 0 0 1-1.06-1.06L10.94 12 6.47 7.53a.75.75 0 0 1 1.06-1.06L12 10.94l4.47-4.47a.75.75 0 0 1 1.06 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Tolak
                        </a>
                        <a href="../controller/approvalPemesananDashboard.php?idPemesanan=' . $dataApproval['id_pemesanan'] . '" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24">
                                <path fill="#fff" fill-rule="evenodd"
                                    d="M19.78 6.22a.75.75 0 0 1 0 1.06l-9.25 9.25a.75.75 0 0 1-1.06 0l-4.25-4.25a.75.75 0 1 1 1.06-1.06l3.72 3.72 8.72-8.72a.75.75 0 0 1 1.06 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Approve
                        </a>
                    </div>';
        echo '</div>
                    </div>
                </div>';
    }
    ?>
    <!-- End Card -->
</div>
</div>
<!-- End Content -->

<!-- JS Implementing Plugins -->

<!-- JS PLUGINS -->
<!-- Required plugins -->
<script src="https://cdn.jsdelivr.net/npm/preline/dist/index.js"></script>
<!-- Apexcharts -->
<script src="https://cdn.jsdelivr.net/npm/lodash/lodash.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts/dist/apexcharts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/preline/dist/helper-apexcharts.js"></script>

<script>
    window.addEventListener("load", () => {
        (function() {
            buildChart(
                "#hs-multiple-bar-charts",
                (mode) => ({
                    chart: {
                        type: "bar",
                        height: 300,
                        toolbar: {
                            show: false,
                        },
                        zoom: {
                            enabled: false,
                        },
                    },
                    series: [{
                            name: "Chosen Period",
                            data: [
                                23000, 44000, 55000, 57000, 56000, 61000, 58000, 63000, 60000,
                                66000, 34000, 78000,
                            ],
                        },
                        {
                            name: "Last Period",
                            data: [
                                17000, 76000, 85000, 101000, 98000, 87000, 105000, 91000, 114000,
                                94000, 67000, 66000,
                            ],
                        },
                    ],
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: "16px",
                            borderRadius: 0,
                        },
                    },
                    legend: {
                        show: false,
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    stroke: {
                        show: true,
                        width: 8,
                        colors: ["transparent"],
                    },
                    xaxis: {
                        categories: [
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July",
                            "August",
                            "September",
                            "October",
                            "November",
                            "December",
                        ],
                        axisBorder: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        },
                        crosshairs: {
                            show: false,
                        },
                        labels: {
                            style: {
                                colors: "#9ca3af",
                                fontSize: "13px",
                                fontFamily: "Inter, ui-sans-serif",
                                fontWeight: 400,
                            },
                            offsetX: -2,
                            formatter: (title) => title.slice(0, 3),
                        },
                    },
                    yaxis: {
                        labels: {
                            align: "left",
                            minWidth: 0,
                            maxWidth: 140,
                            style: {
                                colors: "#9ca3af",
                                fontSize: "13px",
                                fontFamily: "Inter, ui-sans-serif",
                                fontWeight: 400,
                            },
                            formatter: (value) => (value >= 1000 ? `${value / 1000}k` : value),
                        },
                    },
                    states: {
                        hover: {
                            filter: {
                                type: "darken",
                                value: 0.9,
                            },
                        },
                    },
                    tooltip: {
                        y: {
                            formatter: (value) =>
                                `$${value >= 1000 ? `${value / 1000}k` : value}`,
                        },
                        custom: function(props) {
                            const {
                                categories
                            } = props.ctx.opts.xaxis;
                            const {
                                dataPointIndex
                            } = props;
                            const title = categories[dataPointIndex];
                            const newTitle = `${title}`;

                            return buildTooltip(props, {
                                title: newTitle,
                                mode,
                                hasTextLabel: true,
                                wrapperExtClasses: "min-w-28",
                                labelDivider: ":",
                                labelExtClasses: "ms-2",
                            });
                        },
                    },
                    responsive: [{
                        breakpoint: 568,
                        options: {
                            chart: {
                                height: 300,
                            },
                            plotOptions: {
                                bar: {
                                    columnWidth: "14px",
                                },
                            },
                            stroke: {
                                width: 8,
                            },
                            labels: {
                                style: {
                                    colors: "#9ca3af",
                                    fontSize: "11px",
                                    fontFamily: "Inter, ui-sans-serif",
                                    fontWeight: 400,
                                },
                                offsetX: -2,
                                formatter: (title) => title.slice(0, 3),
                            },
                            yaxis: {
                                labels: {
                                    align: "left",
                                    minWidth: 0,
                                    maxWidth: 140,
                                    style: {
                                        colors: "#9ca3af",
                                        fontSize: "11px",
                                        fontFamily: "Inter, ui-sans-serif",
                                        fontWeight: 400,
                                    },
                                    formatter: (value) =>
                                        value >= 1000 ? `${value / 1000}k` : value,
                                },
                            },
                        },
                    }, ],
                }), {
                    colors: ["#2563eb", "#d1d5db"],
                    grid: {
                        borderColor: "#e5e7eb",
                    },
                }, {
                    colors: ["#6b7280", "#2563eb"],
                    grid: {
                        borderColor: "#404040",
                    },
                }
            );
        })();
    });
</script>
<script>
    window.addEventListener("load", () => {
        (function() {
            buildChart(
                "#hs-single-area-chart",
                (mode) => ({
                    chart: {
                        height: 300,
                        type: "area",
                        toolbar: {
                            show: false,
                        },
                        zoom: {
                            enabled: false,
                        },
                    },
                    series: [{
                        name: "Visitors",
                        data: [180, 51, 60, 38, 88, 50, 40, 52, 88, 80, 60, 70],
                    }, ],
                    legend: {
                        show: false,
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    stroke: {
                        curve: "straight",
                        width: 2,
                    },
                    grid: {
                        strokeDashArray: 2,
                    },
                    fill: {
                        type: "gradient",
                        gradient: {
                            type: "vertical",
                            shadeIntensity: 1,
                            opacityFrom: 0.1,
                            opacityTo: 0.8,
                        },
                    },
                    xaxis: {
                        type: "category",
                        tickPlacement: "on",
                        categories: [
                            "25 January 2023",
                            "26 January 2023",
                            "27 January 2023",
                            "28 January 2023",
                            "29 January 2023",
                            "30 January 2023",
                            "31 January 2023",
                            "1 February 2023",
                            "2 February 2023",
                            "3 February 2023",
                            "4 February 2023",
                            "5 February 2023",
                        ],
                        axisBorder: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        },
                        crosshairs: {
                            stroke: {
                                dashArray: 0,
                            },
                            dropShadow: {
                                show: false,
                            },
                        },
                        tooltip: {
                            enabled: false,
                        },
                        labels: {
                            style: {
                                colors: "#9ca3af",
                                fontSize: "13px",
                                fontFamily: "Inter, ui-sans-serif",
                                fontWeight: 400,
                            },
                            formatter: (title) => {
                                let t = title;

                                if (t) {
                                    const newT = t.split(" ");
                                    t = `${newT[0]} ${newT[1].slice(0, 3)}`;
                                }

                                return t;
                            },
                        },
                    },
                    yaxis: {
                        labels: {
                            align: "left",
                            minWidth: 0,
                            maxWidth: 140,
                            style: {
                                colors: "#9ca3af",
                                fontSize: "13px",
                                fontFamily: "Inter, ui-sans-serif",
                                fontWeight: 400,
                            },
                            formatter: (value) => (value >= 1000 ? `${value / 1000}k` : value),
                        },
                    },
                    tooltip: {
                        x: {
                            format: "MMMM yyyy",
                        },
                        y: {
                            formatter: (value) =>
                                `${value >= 1000 ? `${value / 1000}k` : value}`,
                        },
                        custom: function(props) {
                            const {
                                categories
                            } = props.ctx.opts.xaxis;
                            const {
                                dataPointIndex
                            } = props;
                            const title = categories[dataPointIndex].split(" ");
                            const newTitle = `${title[0]} ${title[1]}`;

                            return buildTooltip(props, {
                                title: newTitle,
                                mode,
                                valuePrefix: "",
                                hasTextLabel: true,
                                markerExtClasses: "rounded-sm!",
                                wrapperExtClasses: "min-w-28",
                            });
                        },
                    },
                    responsive: [{
                        breakpoint: 568,
                        options: {
                            chart: {
                                height: 300,
                            },
                            labels: {
                                style: {
                                    colors: "#9ca3af",
                                    fontSize: "11px",
                                    fontFamily: "Inter, ui-sans-serif",
                                    fontWeight: 400,
                                },
                                offsetX: -2,
                                formatter: (title) => title.slice(0, 3),
                            },
                            yaxis: {
                                labels: {
                                    align: "left",
                                    minWidth: 0,
                                    maxWidth: 140,
                                    style: {
                                        colors: "#9ca3af",
                                        fontSize: "11px",
                                        fontFamily: "Inter, ui-sans-serif",
                                        fontWeight: 400,
                                    },
                                    formatter: (value) =>
                                        value >= 1000 ? `${value / 1000}k` : value,
                                },
                            },
                        },
                    }, ],
                }), {
                    colors: ["#2563eb", "#9333ea"],
                    fill: {
                        gradient: {
                            stops: [0, 90, 100],
                        },
                    },
                    grid: {
                        borderColor: "#e5e7eb",
                    },
                }, {
                    colors: ["#3b82f6", "#a855f7"],
                    fill: {
                        gradient: {
                            stops: [100, 90, 0],
                        },
                    },
                    grid: {
                        borderColor: "#404040",
                    },
                }
            );
        })();
    });
</script>

<script>
    document.querySelector('[data-hs-remove-element="#dismiss-alert"]').addEventListener('click', function() {
        const url = new URL(window.location);
        url.searchParams.delete('tambah');
        window.history.replaceState({}, document.title, url.pathname + url.search);
    });
    document.querySelector('[data-hs-remove-element="#dismiss-alert"]').addEventListener('click', function() {
        const url = new URL(window.location);
        url.searchParams.delete('hapus');
        window.history.replaceState({}, document.title, url.pathname + url.search);
    });
    document.querySelector('[data-hs-remove-element="#dismiss-alert"]').addEventListener('click', function() {
        const url = new URL(window.location);
        url.searchParams.delete('update');
        window.history.replaceState({}, document.title, url.pathname + url.search);
    });
    document.querySelector('[data-hs-remove-element="#dismiss-alert"]').addEventListener('click', function() {
        const url = new URL(window.location);
        url.searchParams.delete('approval');
        window.history.replaceState({}, document.title, url.pathname + url.search);
    });
</script>