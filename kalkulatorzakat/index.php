<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Description" content="Kalkulator Zakat Online untuk Menghitung Zakat Penghasilan">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lateef&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link rel="icon" type="image/png" href="../myassets/img/favicon2 (2).png" sizes="32x32">
    <link rel="apple-touch-icon" href="../myassets/img/favicon2 (2).png">

    <!-- Muslim Web CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/icons.css">
    <link rel="stylesheet" href="../assets/css/remixicon.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">

    <link rel="stylesheet" href="../myassets/css/kalkulatorzakat.css">

    <title>Kalkulator Zakat</title>
</head>
<body>
    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->
            <header class="main_haeder multi_item">
                <div class="em_side_right">
                    <a class="btn btn__back rounded-circle bg-snow" href="../../quranweb/">
                        <i class="tio-chevron_left"></i>
                    </a>
                </div>
                <div class="title_page">
                    <span class="page_name">Kalkulator Zakat</span>
                </div>
                <div class="em_side_right">
                    <button type="button" class="btn btn_menuSidebar item-show" data-toggle="modal" data-target="#mdllSidebarMenu-background">
                        <i class="ri-menu-fill"></i>
                    </button>
                </div>
            </header>
            <!-- End.main_haeder -->

            <!-- Main Content -->
            <main id="app" class="container mt-4 animate__animated animate__fadeIn">
                <div class="row">
                    <div class="col-lg-12" style="margin-bottom: 3rem;">
                        <div class="card my-5 border-0 shadow animate__animated animate__zoomIn">
                            <div class="card-header my-card-header d-flex justify-content-between align-items-center">
                                <span class="animate__animated animate__fadeInLeft">Kalkulator Zakat</span>
                            </div>
                            <div class="card-body">
                                <div class="kalkulator-zakat">
                                    <h2>Kalkulator Zakat</h2>
                                    <div class="hitung-nishab">
                                        <h3>Hitung Nishab</h3>
                                        <p>Nishab dihitung sebagai acuannya apakah seorang Muslim wajib mengeluarkan zakat atau tidak. Berdasarkan dalil Al-Qur’an Surah Al Baqarah ayat 267, Peraturan Menteri Agama Nomor 31 Tahun 2019, Fatwa MUI Nomor 3 Tahun 2003, dan pendapat Syaikh Yusuf Qardawi, untuk zakat penghasilan dan emas, nishabnya adalah sebesar 85 gram emas dalam satu tahun. Untuk zakat penghasilan yang ditunaikan tiap bulan, maka nishabnya adalah 1/12 dari 85 gram emas.</p>
                                        <div class="input-group">
                                            <label for="goldPrice">Harga Emas Saat Ini (IDR per gram)</label>
                                            <input type="text" id="goldPrice" v-model="formattedGoldPrice" placeholder="Masukkan harga emas" @input="formatGoldPriceInput">
                                            <a href="https://www.logammulia.com/id/harga-emas-hari-ini"><span class="gold-price-link">Tidak tahu harga emas? Klik disini untuk mencari tahu.</span></a>
                                        </div>
                                    </div>
                                    <div class="zakat-penghasilan">
                                        <h3>Zakat Penghasilan</h3>
                                        <div class="input-group">
                                            <label for="monthlyIncome">Penghasilan per Bulan (IDR)</label>
                                            <input type="text" id="monthlyIncome" v-model="formattedMonthlyIncome" placeholder="Masukkan penghasilan" @input="formatMonthlyIncomeInput">
                                        </div>
                                        <div class="input-group">
                                            <label for="otherIncome">Pendapatan Lain (jika ada) (IDR)</label>
                                            <input type="text" id="otherIncome" v-model="formattedOtherIncome" placeholder="Masukkan pendapatan lain" @input="formatOtherIncomeInput">
                                        </div>
                                        <button class="btn btn-primary mt-3" @click="calculateZakat">Hitung Zakat</button>
                                    </div>
                                    <div class="result" :class="{ 'show': showResults }">
                                        <p>Nishab per tahun: Rp. {{ formatNumber(annualNishab) }}</p>
                                        <p>Nishab per bulan: Rp. {{ formatNumber(monthlyNishab) }}</p>
                                        <p>Zakat yang perlu dikeluarkan (per bulan): Rp. {{ formatNumber(zakatAmount) }}</p>
                                    </div>
                                    <div class="obligation" :class="{ 'show': showResults }">
                                        <p>Apakah kamu wajib zakat? <span :class="{ obligated: isObligated }">{{ isObligated ? 'YA' : 'TIDAK' }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                © 2025 - Kita Berbagi Community
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- Footer -->
        <footer class="em_main_footer with__text just_color p-0">
            <div class="em_body_navigation -active-links -active_primary position-relative">
                <div class="item_link">
                    <a href="../kalender/" class="btn btn_navLink">
                        <div class="icon_current">
                            <svg id="Iconly_Two-tone_Calendar" data-name="Iconly/Two-tone/Calendar" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Calendar" transform="translate(3 2)">
                                    <path id="Line_200" d="M0,.473H17.824" transform="translate(0.093 6.931)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                    <path id="Combined_Shape" data-name="Combined Shape" d="M9.343,4.36h.009Zm-4.438,0h.01Zm-4.446,0H.468ZM9.343.473h.009Zm-4.438,0h.01ZM.459.473H.468Z" transform="translate(4.099 10.837)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                    <path id="Line_207" d="M.463,0V3.291" transform="translate(12.581 0)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                    <path id="Line_208" d="M.463,0V3.291" transform="translate(4.502 0)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                    <path id="Path" d="M13.238,0H4.771C1.834,0,0,1.636,0,4.643v9.05c0,3.054,1.834,4.728,4.771,4.728h8.458c2.946,0,4.771-1.645,4.771-4.652V4.643C18.009,1.636,16.184,0,13.238,0Z" transform="translate(0 1.579)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                </g>
                            </svg>
                        </div>
                        <div class="txt__tile">Calender</div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="../jadwalsholatdanimsakiah/" class="btn btn_navLink">
                        <div class="">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="txt__tile">Sholat</div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="../../quranweb/" class="btn btn_navLink">
                        <button type="button" class="btn btnCircle_default _lg">
                            <svg id="Iconly_Curved_Home" data-name="Iconly/Curved/Home" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <g id="Home" transform="translate(2 1.667)">
                                    <path id="Stroke_1" data-name="Stroke 1" d="M0,.5H4.846" transform="translate(5.566 11.28)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    <path id="Stroke_2" data-name="Stroke 2" d="M0,9.761C0,5.068.512,5.4,3.266,2.842,4.471,1.872,6.346,0,7.965,0S11.5,1.862,12.712,2.842c2.754,2.554,3.265,2.227,3.265,6.919,0,6.906-1.633,6.906-7.988,6.906S0,16.667,0,9.761Z" transform="translate(0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                </g>
                            </svg>
                        </button>
                    </a>
                </div>
                <div class="item_link">
                    <a href="https://kitaberbagi.com/forum/" class="btn btn_navLink">
                        <div class="icon_current">
                            <svg id="Iconly_Curved_Document" data-name="Iconly/Curved/Document" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Document" transform="translate(3.61 2.75)">
                                    <path id="Stroke_1" data-name="Stroke 1" d="M7.22.5H0" transform="translate(4.766 12.446)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                    <path id="Stroke_2" data-name="Stroke 2" d="M7.22.5H0" transform="translate(4.766 8.686)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                    <path id="Stroke_3" data-name="Stroke 3" d="M2.755.5H0" transform="translate(4.766 4.927)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                    <path id="Stroke_4" data-name="Stroke 4" d="M0,9.25c0,6.937,2.1,9.25,8.391,9.25s8.391-2.313,8.391-9.25S14.685,0,8.391,0,0,2.313,0,9.25Z" transform="translate(0)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                </g>
                            </svg>
                        </div>
                        <div class="txt__tile">Chats</div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="../setting/" class="btn btn_navLink">
                        <div class="icon_current">
                            <svg id="Iconly_Two-tone_Setting" data-name="Iconly/Two-tone/Setting" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Setting" transform="translate(2.5 1.5)">
                                    <path id="Path_33946" d="M17.528,5.346l-.622-1.08a1.913,1.913,0,0,0-2.609-.7h0a1.9,1.9,0,0,1-2.609-.677,1.831,1.831,0,0,1-.256-.915h0A1.913,1.913,0,0,0,9.519,0H8.265a1.9,1.9,0,0,0-1.9,1.913h0A1.913,1.913,0,0,1,4.448,3.8a1.831,1.831,0,0,1-.915-.256h0a1.913,1.913,0,0,0-2.609.7l-.668,1.1a1.913,1.913,0,0,0,.7,2.609h0a1.913,1.913,0,0,1,.957,1.657,1.913,1.913,0,0,1-.957,1.657h0a1.9,1.9,0,0,0-.7,2.6h0l.632,1.089A1.913,1.913,0,0,0,3.5,15.7h0a1.895,1.895,0,0,1,2.6.7,1.831,1.831,0,0,1,.256.915h0a1.913,1.913,0,0,0,1.913,1.913H9.519a1.913,1.913,0,0,0,1.913-1.9h0a1.9,1.9,0,0,1,1.913-1.913,1.95,1.95,0,0,1,.915.256h0a1.913,1.913,0,0,0,2.609-.7h0l.659-1.1a1.9,1.9,0,0,0-.7-2.609h0a1.9,1.9,0,0,1-.7-2.609,1.876,1.876,0,0,1,.7-.7h0a1.913,1.913,0,0,0,.7-2.6h0Z" transform="translate(0.779 0.778)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                    <circle id="Ellipse_737" cx="2.636" cy="2.636" r="2.636" transform="translate(7.039 7.753)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                </g>
                            </svg>
                        </div>
                        <div class="txt__tile">Settings</div>
                    </a>
                </div>
            </div>
        </footer>

        <!-- Modal Sidebar Menu dari Hadist Digital -->
        <div class="modal sidebarMenu -left fade" id="mdllSidebarMenu-background" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header d-block">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                        <div class="em_profile_user">
                            <div class="media">
                                <a href="page-profile.html">
                                    <div class="letter bg-yellow">
                                        <span>c</span>
                                    </div>
                                </a>
                                <div class="media-body">
                                    <div class="txt">
                                        <h3>Syahril May Mubdi</h3>
                                        <p>+62 822 6740 3010</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <ul class="nav flex-column -active-links">
                            <li class="nav-item">
                                <a class="nav-link" href="../../quranweb/">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg id="Iconly_Curved_Home" data-name="Iconly/Curved/Home" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <g id="Home" transform="translate(2 1.667)">
                                                    <path id="Stroke_1" data-name="Stroke 1" d="M0,.5H4.846" transform="translate(5.566 11.28)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_2" data-name="Stroke 2" d="M0,9.761C0,5.068.512,5.4,3.266,2.842,4.471,1.872,6.346,0,7.965,0S11.5,1.862,12.712,2.842c2.754,2.554,3.265,2.227,3.265,6.919,0,6.906-1.633,6.906-7.988,6.906S0,16.667,0,9.761Z" transform="translate(0)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="title_link">Homepages</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://kitaberbagi.com/forum/">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg id="Iconly_Curved_Document" data-name="Iconly/Curved/Document" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <g id="Document" transform="translate(3.008 2.292)">
                                                    <path id="Stroke_1" data-name="Stroke 1" d="M6.017.5H0" transform="translate(3.971 10.289)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_2" data-name="Stroke 2" d="M6.017.5H0" transform="translate(3.971 7.155)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_3" data-name="Stroke 3" d="M2.3.5H0" transform="translate(3.972 4.023)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_4" data-name="Stroke 4" d="M0,7.708c0,5.781,1.748,7.708,6.992,7.708s6.992-1.927,6.992-7.708S12.238,0,6.992,0,0,1.927,0,7.708Z" transform="translate(0)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="title_link">Community</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../quran/">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="20" height="20">
                                                <rect x="8" y="10" width="48" height="44" rx="4" ry="4" fill="none" stroke="#9498ac" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <rect x="12" y="14" width="40" height="36" rx="2" ry="2" fill="none" stroke="#9498ac" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <line x1="32" y1="14" x2="32" y2="50" stroke="#9498ac" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <polygon points="32,26 36,30 32,34 28,30" fill="none" stroke="#9498ac" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <circle cx="32" cy="30" r="2" fill="none" stroke="#9498ac" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <rect x="8" y="50" width="48" height="4" fill="none" stroke="#9498ac" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <span class="title_link">Al - Quran</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg id="Iconly_Curved_Discovery" data-name="Iconly/Curved/Discovery" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <g id="Discovery" transform="translate(2.292 2.292)">
                                                    <path id="Stroke_1" data-name="Stroke 1" d="M0,7.708c0,5.781,1.927,7.708,7.708,7.708s7.708-1.927,7.708-7.708S13.489,0,7.708,0,0,1.927,0,7.708Z" transform="translate(0 0)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_3" data-name="Stroke 3" d="M0,5.5,1.312,1.312,5.5,0,4.192,4.191Z" transform="translate(4.957 4.957)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="title_link">Kiblat</span>
                                    </div>
                                </a>
                            </li>
                            <label class="title__label">other</label>
                            <li class="nav-item">
                                <a class="nav-link" href="../setting/">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg id="Iconly_Curved_Setting" data-name="Iconly/Curved/Setting" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <g id="Setting" transform="translate(2.917 2.083)">
                                                    <path id="Stroke_1" data-name="Stroke 1" d="M2.083,0A2.083,2.083,0,1,1,0,2.083,2.083,2.083,0,0,1,2.083,0Z" transform="translate(5 5.833)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_3" data-name="Stroke 3" d="M13.89,3.959h0a2.053,2.053,0,0,0-2.816-.76A1.286,1.286,0,0,1,9.145,2.077,2.07,2.07,0,0,0,7.083,0h0A2.07,2.07,0,0,0,5.021,2.077,1.286,1.286,0,0,1,3.093,3.2a2.054,2.054,0,0,0-2.817.76A2.085,2.085,0,0,0,1.031,6.8a1.3,1.3,0,0,1,0,2.243,2.085,2.085,0,0,0-.755,2.837,2.054,2.054,0,0,0,2.816.761h0a1.285,1.285,0,0,1,1.928,1.121h0a2.07,2.07,0,0,0,2.062,2.077h0a2.07,2.07,0,0,0,2.062-2.077h0a1.286,1.286,0,0,1,1.929-1.121,2.054,2.054,0,0,0,2.816-.761,2.085,2.085,0,0,0-.754-2.837h0a1.3,1.3,0,0,1,0-2.243A2.085,2.085,0,0,0,13.89,3.959Z" transform="translate(0)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="title_link">Settings</span>
                                    </div>
                                    <div class="em_pulp">
                                        <span class="doted_item"></span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://easydigital.co.id/">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg id="Iconly_Curved_Message" data-name="Iconly/Curved/Message" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <g id="Message" transform="translate(2.043 2.377)">
                                                    <path id="Stroke_1" data-name="Stroke 1" d="M9.292,0S6.617,3.211,4.661,3.211,0,0,0,0" transform="translate(3.285 5.139)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_3" data-name="Stroke 3" d="M0,7.6C0,1.9,1.984,0,7.937,0s7.937,1.9,7.937,7.6-1.984,7.6-7.937,7.6S0,13.295,0,7.6Z" transform="translate(0 0)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="title_link">Support</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="page-about.html">
                                    <div class="#">
                                        <div class="icon_current">
                                            <svg id="Iconly_Curved_Info_Square" data-name="Iconly/Curved/Info Square" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <g id="Info_Square" data-name="Info Square" transform="translate(2.292 2.292)">
                                                    <path id="Stroke_1" data-name="Stroke 1" d="M0,7.708C0,1.927,1.927,0,7.708,0s7.708,1.927,7.708,7.708-1.927,7.708-7.708,7.708S0,13.489,0,7.708Z" transform="translate(15.417 15.417) rotate(180)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_3" data-name="Stroke 3" d="M0,0V3.246" transform="translate(7.708 10.954) rotate(180)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_15" data-name="Stroke 15" d="M0,0H.007" transform="translate(7.712 4.792) rotate(180)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="title_link">About</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <div class="em_darkMode_menu">
                            <label class="text" for="switchDarkMode">
                                <h3>Dark Mode</h3>
                                <p>Browsing in night mode</p>
                            </label>
                            <label class="switch_toggle toggle_lg" for="switchDarkMode">
                                <input type="checkbox" class="switchDarkMode" id="switchDarkMode">
                                <span class="handle"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End. Modal Sidebar Menu dari quran Digital -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="../myassets/js/kalkulatorzakat.js"></script>
</body>
</html>