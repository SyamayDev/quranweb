<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#ffffff">
    <title>Kalender Masehi & Hijriyah</title>
    <meta name="description" content="Kalender Masehi dan Hijriyah terintegrasi dengan tema Al-Qur'an Digital">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../myassets/img/favicon2 (2).png" sizes="32x32">
    <link rel="apple-touch-icon" href="../myassets/img/favicon2 (2).png">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/icons.css">
    <link rel="stylesheet" href="../assets/css/remixicon.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="../myassets/css/kalender.css">
</head>
<body>
    <div id="wrapper">
        <div id="content">
            <!-- Header -->
            <header class="main_haeder multi_item">
                <div class="em_side_right">
                    <a class="btn btn__back rounded-circle bg-snow" href="../../quranweb/">
                        <i class="tio-chevron_left"></i>
                    </a>
                </div>
                <div class="title_page">
                    <span class="page_name">Kalender Masehi & Hijriyah</span>
                </div>
                <div class="em_side_right">
                    <button type="button" class="btn btn_menuSidebar item-show" data-toggle="modal" data-target="#mdllSidebarMenu-background">
                        <i class="ri-menu-fill"></i>
                    </button>
                </div>
            </header>

            <!-- Main Content -->
            <main class="container mt-4">
                <div class="card animate__animated animate__zoomIn">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <button id="eventListBtn" class="btn event-list-btn" title="Lihat Daftar Acara">
                                <i class="fas fa-list"></i>
                            </button>
                            <button id="refreshBtn" class="btn refresh-btn" title="Refresh">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <div class="d-flex justify-content-center align-items-center flex-grow-1 header-content">
                                <button id="prevMonth" class="btn btn-light"><i class="fas fa-arrow-left"></i></button>
                                <h5 id="monthYear" class="mb-0 mx-2 text-center"></h5>
                                <button id="nextMonth" class="btn btn-light"><i class="fas fa-arrow-right"></i></button>
                                <div class="select-container-wrapper">
                                    <div class="select-container mx-2">
                                        <select id="monthSelect" class="form-control"></select>
                                    </div>
                                    <div class="select-container">
                                        <select id="yearSelect" class="form-control"></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="calendar-table">
                            <thead>
                                <tr>
                                    <th>Minggu</th><th>Senin</th><th>Selasa</th><th>Rabu</th>
                                    <th>Kamis</th><th>Jumat</th><th>Sabtu</th>
                                </tr>
                            </thead>
                            <tbody id="calendarBody"></tbody>
                        </table>
                        <div class="mt-3">
                            <p id="hijriDate" style="font-size: 0.9rem;"></p>
                            <p id="countdown" style="font-size: 0.9rem;"></p>
                        </div>
                    </div>
                </div>

                <!-- Modal untuk Menandai Tanggal -->
                <div class="modal fade" id="markDateModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tandai Tanggal</h5>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <p>Tanggal: <span id="selectedDate" style="font-size: 0.9rem;"></span></p>
                                <input type="text" id="eventName" class="form-control mb-2" placeholder="Nama Acara" style="font-size: 0.9rem;">
                                <input type="time" id="eventTime" class="form-control" placeholder="Waktu (HH:MM)" style="font-size: 0.9rem;">
                            </div>
                            <div class="modal-footer">
                                <button id="saveEvent" class="btn btn-success" style="font-size: 0.9rem;">Simpan</button>
                                <button id="deleteEvent" class="btn btn-danger" style="font-size: 0.9rem;">Hapus</button>
                                <button class="btn btn-secondary" data-dismiss="modal" style="font-size: 0.9rem;">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal untuk Daftar Acara -->
                <div class="modal fade" id="eventListModal" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Daftar Acara</h5>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-striped acara">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nama Acara</th>
                                            <th>Waktu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="eventListBody"></tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-dismiss="modal" style="font-size: 0.9rem;">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Countdown -->
                <div class="modal fade" id="countdownModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Pengingat</h5>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <p id="countdownMessage" style="font-size: 0.9rem;"></p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-dismiss="modal" style="font-size: 0.9rem;">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- Start em_main_footer -->
        <footer class="em_main_footer with__text just_color p-0">
            <div class="em_body_navigation -active-links -active_primary position-relative">
                <div class="item_link">
                    <a href="../kalender/" class="btn btn_navLink">
                        <div class="icon_current">
                            <svg id="Iconly_Two-tone_Calendar" data-name="Iconly/Two-tone/Calendar"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Calendar" transform="translate(3 2)">
                                    <path id="Line_200" d="M0,.473H17.824" transform="translate(0.093 6.931)"
                                        fill="none" stroke="#200e32" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"
                                        opacity="0.4" />
                                    <path id="Combined_Shape" data-name="Combined Shape"
                                        d="M9.343,4.36h.009Zm-4.438,0h.01Zm-4.446,0H.468ZM9.343.473h.009Zm-4.438,0h.01ZM.459.473H.468Z"
                                        transform="translate(4.099 10.837)" fill="none" stroke="#200e32"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" opacity="0.4" />
                                    <path id="Line_207" d="M.463,0V3.291" transform="translate(12.581 0)"
                                        fill="none" stroke="#200e32" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                    <path id="Line_208" d="M.463,0V3.291" transform="translate(4.502 0)"
                                        fill="none" stroke="#200e32" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                    <path id="Path"
                                        d="M13.238,0H4.771C1.834,0,0,1.636,0,4.643v9.05c0,3.054,1.834,4.728,4.771,4.728h8.458c2.946,0,4.771-1.645,4.771-4.652V4.643C18.009,1.636,16.184,0,13.238,0Z"
                                        transform="translate(0 1.579)" fill="none" stroke="#200e32"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" />
                                </g>
                            </svg>
                        </div>
                        <div class="icon_active">
                            <svg id="Iconly_Bulk_Calendar" data-name="Iconly/Bulk/Calendar"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Calendar" transform="translate(3 2)">
                                    <path id="Fill_1" data-name="Fill 1"
                                        d="M5.127,12.743A4.776,4.776,0,0,1,0,7.613V0H18V7.674c0,3.138-1.976,5.069-5.137,5.069Z"
                                        transform="translate(0 7.257)" fill="#200e32" />
                                    <path id="Fill_4" data-name="Fill 4"
                                        d="M0,5.767A15.855,15.855,0,0,1,.155,3.64,4.591,4.591,0,0,1,4.541,0h8.911a4.639,4.639,0,0,1,4.386,3.64,15.892,15.892,0,0,1,.154,2.127Z"
                                        transform="translate(0.003 1.49)" fill="#200e32" opacity="0.4" />
                                    <path id="Fill_6" data-name="Fill 6"
                                        d="M.761,4.59a.747.747,0,0,0,.761-.77V.771A.748.748,0,0,0,.761,0,.748.748,0,0,0,0,.771V3.82a.747.747,0,0,0,.761.77"
                                        transform="translate(4.544 0)" fill="#200e32" />
                                    <path id="Fill_9" data-name="Fill 9"
                                        d="M.761,4.59a.753.753,0,0,0,.761-.77V.771A.754.754,0,0,0,.761,0,.748.748,0,0,0,0,.771V3.82a.747.747,0,0,0,.761.77"
                                        transform="translate(11.934 0)" fill="#200e32" />
                                </g>
                            </svg>
        
                        </div>
                        <div class="txt__tile">Calender</div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="../jadwalsholatdanimsakiah/" class="btn btn_navLink">
                        <div class="icon_current">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="txt__tile">Sholat</div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="../" class="btn btn_navLink">
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
                            <svg id="Iconly_Curved_Document" data-name="Iconly/Curved/Document"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Document" transform="translate(3.61 2.75)">
                                    <path id="Stroke_1" data-name="Stroke 1" d="M7.22.5H0"
                                        transform="translate(4.766 12.446)" fill="none" stroke="#9498ac"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" />
                                    <path id="Stroke_2" data-name="Stroke 2" d="M7.22.5H0"
                                        transform="translate(4.766 8.686)" fill="none" stroke="#9498ac"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" />
                                    <path id="Stroke_3" data-name="Stroke 3" d="M2.755.5H0"
                                        transform="translate(4.766 4.927)" fill="none" stroke="#9498ac"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" />
                                    <path id="Stroke_4" data-name="Stroke 4"
                                        d="M0,9.25c0,6.937,2.1,9.25,8.391,9.25s8.391-2.313,8.391-9.25S14.685,0,8.391,0,0,2.313,0,9.25Z"
                                        transform="translate(0)" fill="none" stroke="#9498ac"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" />
                                </g>
                            </svg>
                        </div>
                        <div class="txt__tile">Chats</div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="../setting/" class="btn btn_navLink">
                        <div class="icon_current">
                            <svg id="Iconly_Two-tone_Setting" data-name="Iconly/Two-tone/Setting"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Setting" transform="translate(2.5 1.5)">
                                    <path id="Path_33946"
                                        d="M17.528,5.346l-.622-1.08a1.913,1.913,0,0,0-2.609-.7h0a1.9,1.9,0,0,1-2.609-.677,1.831,1.831,0,0,1-.256-.915h0A1.913,1.913,0,0,0,9.519,0H8.265a1.9,1.9,0,0,0-1.9,1.913h0A1.913,1.913,0,0,1,4.448,3.8a1.831,1.831,0,0,1-.915-.256h0a1.913,1.913,0,0,0-2.609.7l-.668,1.1a1.913,1.913,0,0,0,.7,2.609h0a1.913,1.913,0,0,1,.957,1.657,1.913,1.913,0,0,1-.957,1.657h0a1.9,1.9,0,0,0-.7,2.6h0l.632,1.089A1.913,1.913,0,0,0,3.5,15.7h0a1.895,1.895,0,0,1,2.6.7,1.831,1.831,0,0,1,.256.915h0a1.913,1.913,0,0,0,1.913,1.913H9.519a1.913,1.913,0,0,0,1.913-1.9h0a1.9,1.9,0,0,1,1.913-1.913,1.95,1.95,0,0,1,.915.256h0a1.913,1.913,0,0,0,2.609-.7h0l.659-1.1a1.9,1.9,0,0,0-.7-2.609h0a1.9,1.9,0,0,1-.7-2.609,1.876,1.876,0,0,1,.7-.7h0a1.913,1.913,0,0,0,.7-2.6h0Z"
                                        transform="translate(0.779 0.778)" fill="none" stroke="#200e32"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" />
                                    <circle id="Ellipse_737" cx="2.636" cy="2.636" r="2.636"
                                        transform="translate(7.039 7.753)" fill="none" stroke="#200e32"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5" opacity="0.4" />
                                </g>
                            </svg>
                        </div>
                        <div class="icon_active">
                            <svg id="Iconly_Bulk_Setting" data-name="Iconly/Bulk/Setting"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Setting" transform="translate(2.5 2)">
                                    <path id="Path"
                                        d="M2.9,5.65A2.853,2.853,0,0,1,0,2.83,2.861,2.861,0,0,1,2.9,0a2.825,2.825,0,1,1,0,5.65"
                                        transform="translate(6.61 7.18)" fill="#200e32" />
                                    <path id="Path-2" data-name="Path"
                                        d="M18.73,12.37a2.3,2.3,0,0,0-.828-.79,1.547,1.547,0,0,1-.634-.64,1.822,1.822,0,0,1,.654-2.5,2.027,2.027,0,0,0,.756-2.83l-.685-1.18a2.112,2.112,0,0,0-2.872-.76,1.973,1.973,0,0,1-2.575-.69,1.546,1.546,0,0,1-.235-.88,1.778,1.778,0,0,0-.276-1.06A2.152,2.152,0,0,0,10.217,0H8.776A2.195,2.195,0,0,0,6.967,1.04,1.785,1.785,0,0,0,6.681,2.1a1.546,1.546,0,0,1-.235.88,1.963,1.963,0,0,1-2.565.69A2.124,2.124,0,0,0,1,4.43L.314,5.61a2.044,2.044,0,0,0,.756,2.83,1.834,1.834,0,0,1,.664,2.5,1.634,1.634,0,0,1-.644.64,2.118,2.118,0,0,0-.818.79,2,2,0,0,0,.02,2.05L1,15.62a2.134,2.134,0,0,0,1.819,1.04,2.161,2.161,0,0,0,1.083-.3,1.586,1.586,0,0,1,.9-.23,1.892,1.892,0,0,1,1.88,1.82A2.07,2.07,0,0,0,8.807,20H10.2a2.068,2.068,0,0,0,2.115-2.05A1.908,1.908,0,0,1,14.2,16.13a1.63,1.63,0,0,1,.9.23,2.1,2.1,0,0,0,2.892-.74l.715-1.2a2.018,2.018,0,0,0,.02-2.05"
                                        fill="#200e32" opacity="0.4" />
                                </g>
                            </svg>
        
                        </div>
                        <div class="txt__tile">Settings</div>
                    </a>
                </div>
            </div>
        </footer>
        <!-- End. em_main_footer -->

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
    <!-- End. Modal Sidebar Menu dari Hadist Digital -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js" defer></script>
    <script src="../assets/js/pwa-services.js"></script>

    <!-- Script untuk Kalender -->
     <script src="../myassets/js/kalender.js"></script>
</body>
</html>