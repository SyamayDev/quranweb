<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#ffffff">
    <title>Nepro – The Multipurpose Mobile HTML5 Template</title>
    <meta name="description" content="Nepro – The Multipurpose Mobile HTML5 Template">
    <meta name="keywords" content="bootstrap 4, mobile template, 404, chat, about, cordova, phonegap, mobile, html, ecommerce, shopping, store, delivery, wallet, banking, education, jobs, careers, distance learning" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/img/favicon/32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="../assets/img/favicon/favicon192.png">
    <!-- Font Awesome 5 Online Links -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/icons.css">
    <link rel="stylesheet" href="../assets/css/remixicon.css">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --color-black: #000;
            --color-white: #fff;
            --color-primary: #556fff;
            --color-secondary: #0e132d;
            --color-snow: #cbcdd8;
            --color-red: #ff4040;
            --color-orange: #ff702c;
            --color-blue: #4a8cfd;
            --color-yellow: #fa9905;
            --color-green: #41bd83;
            --color-text: #9498ac;
            --color-comment: #5d6072;
            --color-pink: #ff59a2;
            --color-turquoise: #20bbd3;
            --color-purple: #a659ff;
            --bg-black: #000;
            --bg-white: #fff;
            --bg-primary: #556fff;
            --bg-secondary: #0e132d;
            --bg-snow: #f7f7f8;
            --bg-red: #ff4040;
            --bg-orange: #ff702c;
            --bg-blue: #53a7f9;
            --bg-yellow: #fa9905;
            --bg-green: #41bd83;
            --bg-purple: #a659ff;
            --bg-pink: #ff59a2;
            --bg-turquoise: #20bbd3;
            --border-black: #000;
            --border-white: #fff;
            --border-primary: #556fff;
            --border-secondary: #0e132d;
            --border-snow: #efeff6;
            --border-red: #ff4040;
            --border-orange: #ff702c;
            --border-blue: #4a8cfd;
            --border-yellow: #fa9905;
            --border-green: #41bd83;
            --border-input: #efeff6;
        }

        /* Dark Mode Overrides */
        [data-theme="dark"] {
            --bg-white: #0e132d;
            --bg-secondary: #1a1f3a;
            --color-white: #cbcdd8;
            --color-text: #a1a5b7;
            --bg-snow: #1a1f3a;
            --border-snow: #2d3553;
            --bg-primary: #556fff;
        }

        body {
            background-color: var(--bg-white);
            color: var(--color-text);
            transition: all 0.3s ease;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .settings-accordion {
            padding: 70px 20px 20px 20px;
            background-color: var(--bg-snow);
            border-radius: 10px;
        }

        .card {
            background-color: var(--bg-white);
            border: 1px solid var(--border-snow);
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .card-header {
            background-color: var(--bg-secondary);
            color: var(--color-white);
        }

        .btn-link {
            color: var(--color-white);
            text-decoration: none;
        }

        .btn-link:hover {
            color: var(--color-snow);
        }

        .form-control {
            background-color: var(--bg-secondary);
            color: var(--color-white);
            border: 1px solid var(--border-input);
        }

        .btn-primary {
            background-color: var(--bg-primary);
            color: var(--color-white);
            border: none;
        }

        .btn-primary:hover {
            background-color: var(--color-blue);
        }

        .custom-control-label {
            color: var(--color-text);
        }

        h3 {
            color: var(--color-secondary);
        }

        label {
            color: var(--color-text);
        }

        hr {
            border-color: var(--border-snow);
        }


        .emSimple_main_footer {
            background-color: var(--bg-white);
            border-top: 1px solid var(--border-snow);
        }

        .em_main_footer.with__text.just_color.p-0 {
            position: sticky;
            bottom: 0;
            width: 100%;
            z-index: 1000;
        }
    </style>
    <!-- Manifest -->
    <link rel="manifest" href="_manifest.json" />
</head>

<body data-theme="light">
    <!-- Loader -->
    <section class="em_loading" id="loaderPage">
        <div class="spinner_flash"></div>
    </section>

    <div id="wrapper">
        <div id="content">
            <!-- Header -->
            <header class="main_haeder header-sticky multi_item">
                <div class="em_menu_sidebar">
                    <div class="em_profile_user">
                        <div class="media">
                            <a href="page-profile.html">
                                <div class="letter bg-yellow">
                                    <span>C</span>
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
                <div class="em_side_right">
                    <a href="page-signin-email.html" class="link__forgot d-block size-14 color-primary text-decoration-none hover:color-secondary transition-all">
                        Sign out
                    </a>
                </div>
            </header>

            <!-- Settings Accordion -->
            <section class="settings-accordion padding-20">
                <div class="accordion" id="settingsAccordion">
                    <!-- Account Section -->
                    <div class="card">
                        <div class="card-header" id="headingAccount">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseAccount" aria-expanded="true" aria-controls="collapseAccount">
                                    Account
                                </button>
                            </h2>
                        </div>
                        <div id="collapseAccount" class="collapse show" aria-labelledby="headingAccount" data-parent="#settingsAccordion">
                            <div class="card-body">
                                <h3>Personal Details</h3>
                                <form id="personalDetailsForm">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" value="Syahril May Mubdi">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" value="example@email.com">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                                <hr>
                                <h3>Security & Password</h3>
                                <form id="passwordForm">
                                    <div class="form-group">
                                        <label for="currentPassword">Current Password</label>
                                        <input type="password" class="form-control" id="currentPassword">
                                    </div>
                                    <div class="form-group">
                                        <label for="newPassword">New Password</label>
                                        <input type="password" class="form-control" id="newPassword">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmPassword">Confirm New Password</label>
                                        <input type="password" class="form-control" id="confirmPassword">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Settings Section -->
                    <div class="card">
                        <div class="card-header" id="headingSettings">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
                                    Settings
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSettings" class="collapse" aria-labelledby="headingSettings" data-parent="#settingsAccordion">
                            <div class="card-body">
                                <h3>Language</h3>
                                <div class="form-group">
                                    <label for="language">Select Language</label>
                                    <select class="form-control" id="language">
                                        <option value="English (UK)">English (UK)</option>
                                        <option value="English (US)">English (US)</option>
                                        <option value="Arabic">Arabic</option>
                                        <option value="Chinese (China)">Chinese (China)</option>
                                        <option value="Indonesian">Indonesian</option>
                                    </select>
                                </div>
                                <hr>
                                <h3>Notifications</h3>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="prayerNotification">
                                        <label class="custom-control-label" for="prayerNotification">Prayer Time Notifications</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="imsakNotification">
                                        <label class="custom-control-label" for="imsakNotification">Imsakiyah Notifications</label>
                                    </div>
                                </div>
                                <hr>
                                <h3>Location</h3>
                                <div class="form-group">
                                    <label for="location">Set Location for Prayer Times</label>
                                    <input type="text" class="form-control" id="location" placeholder="Enter your location">
                                    <button type="button" class="btn btn-primary mt-2" id="setLocationBtn">Set Location</button>
                                </div>
                                <hr>
                                <h3>Prayer Time Customization</h3>
                                <div class="form-group">
                                    <label for="prayerMethod">Calculation Method</label>
                                    <select class="form-control" id="prayerMethod">
                                        <option value="Muslim World League">Muslim World League</option>
                                        <option value="Islamic Society of North America">Islamic Society of North America</option>
                                        <option value="Egyptian General Authority">Egyptian General Authority</option>
                                    </select>
                                </div>
                                <hr>
                                <h3>Quran Settings</h3>
                                <div class="form-group">
                                    <label for="quranFontSize">Font Size</label>
                                    <select class="form-control" id="quranFontSize">
                                        <option value="Small">Small</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Large">Large</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Support Section -->
                    <div class="card">
                        <div class="card-header" id="headingSupport">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSupport" aria-expanded="false" aria-controls="collapseSupport">
                                    Support
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSupport" class="collapse" aria-labelledby="headingSupport" data-parent="#settingsAccordion">
                            <div class="card-body">
                                <h3>Email Support</h3>
                                <form id="supportForm">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" id="message" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </form>
                                <hr>
                                <h3>Tentang Aplikasi</h3>
                                <p>Aplikasi Islami untuk membantu umat dalam ibadah sehari-hari, termasuk jadwal sholat, Al-Qur'an, hadist, doa, dan kalkulator zakat.</p>
                                <p>Version: 1.0.0</p>
                                <p>Developed by: [Nama Pengembang]</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Simple Footer -->
            <section class="emSimple_main_footer margin-t-10 border-t border-t-solid border-snow bg-white d-flex justify-content-center text-center padding-20">
                <div class="padding-t-10 padding-b-10">
                    <a href="../../quranweb/" class="brand_sm margin-b-20 d-block">
                        <img src="../img/kitaberbagi-community-logo-pjg.png" alt="">
                    </a>
                    <h3 class="size-13 weight-400 color-secondary margin-b-10">
                        Copyright © Kita Berbagi Community 2025. All Rights Reserved.
                    </h3>
                    <p class="size-12 color-text margin-b-20">
                        Selamat datang di KitaBerbagi.com, tempat di mana kebaikan tumbuh dan berkembang melalui kekuatan kata-kata dan ide-ide inspiratif Anda!
                    </p>
                    <div class="itemNetworks mt-2 emBlock__border">
                        <a href="#" class="btn facebook"><img src="../assets/img/icon/facebook.svg" alt=""></a>
                        <a href="#" class="btn instagram"><img src="../assets/img/icon/instagram.svg" alt=""></a>
                        <a href="#" class="btn youtube"><img src="../assets/img/icon/youtube.svg" alt=""></a>
                        <a href="#" class="btn twitter"><i class="ri-twitter-fill color-twitter"></i></a>
                        <button type="button" class="btn share" data-toggle="modal" data-target="#mdllButtons_share">
                            <i class="ri-share-forward-box-line color-green"></i>
                        </button>
                    </div>
                    <div class="link_privacy">
                        <a href="#" class="btn">Privacy Policy</a>
                        <a href="#" class="btn">Terms of Uses</a>
                    </div>
                </div>
            </section>
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

        <!-- Search Menu -->
        <section class="searchMenu__hdr">
            <form>
                <div class="form-group">
                    <div class="input_group">
                        <input type="search" class="form-control" placeholder="type something here...">
                        <i class="ri-search-2-line icon_serach"></i>
                    </div>
                </div>
            </form>
            <button type="button" class="btn btn_meunSearch -close __removeMenu">
                <i class="tio-clear"></i>
            </button>
        </section>

        <!-- Share Modal -->
        <div class="modal transition-bottom -inside screenFull defaultModal mdlladd__rate fade" id="mdllButtons_share" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-15">
                    <div class="modal-body rounded-15 p-0">
                        <div class="emBK__buttonsShare icon__share padding-20">
                            <button type="button" class="btn" data-sharer="facebook" data-hashtag="hashtag" data-url="https://orinostudio.com/nepro/">
                                <div class="icon bg-facebook rounded-10"><i class="tio-facebook_square"></i></div>
                            </button>
                            <button type="button" class="btn" data-sharer="telegram" data-title="Checkout Nepro!" data-url="https://orinostudio.com/nepro/" data-to="+44555-5555">
                                <div class="icon bg-telegram rounded-10"><i class="tio-telegram"></i></div>
                            </button>
                            <button type="button" class="btn" data-sharer="skype" data-url="https://orinostudio.com/nepro/" data-title="Checkout Nepro!">
                                <div class="icon bg-skype rounded-10"><i class="tio-skype"></i></div>
                            </button>
                            <button type="button" class="btn" data-sharer="linkedin" data-url="https://orinostudio.com/nepro/">
                                <div class="icon bg-linkedin rounded-10"><i class="tio-linkedin_square"></i></div>
                            </button>
                            <button type="button" class="btn" data-sharer="twitter" data-title="Checkout Nepro!" data-hashtags="pwa, Nepro, template, mobile, app, shopping, ecommerce" data-url="https://orinostudio.com/nepro/">
                                <div class="icon bg-twitter rounded-10"><i class="tio-twitter"></i></div>
                            </button>
                            <button type="button" class="btn" data-sharer="whatsapp" data-title="Checkout Nepro!" data-url="https://orinostudio.com/nepro/">
                                <div class="icon bg-whatsapp rounded-10"><i class="tio-whatsapp_outlined"></i></div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="../assets/js/jquery-3.6.0.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/vendor/owl.carousel.min.js"></script>
    <script src="../assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="../assets/js/vendor/sharer.js"></script>
    <script src="../assets/js/vendor/short-and-sweet.min.js"></script>
    <script src="../assets/js/vendor/jquery.knob.min.js"></script>
    <script src="../assets/js/main.js" defer></script>
    <script src="../assets/js/pwa-services.js"></script>

    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            // Theme Toggle
            const themeToggle = $('#themeToggle');
            const body = $('body');

            themeToggle.on('click', function() {
                if (body.attr('data-theme') === 'light') {
                    body.attr('data-theme', 'dark');
                    localStorage.setItem('theme', 'dark');
                } else {
                    body.attr('data-theme', 'light');
                    localStorage.setItem('theme', 'light');
                }
            });

            // Load Saved Theme
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                body.attr('data-theme', savedTheme);
            }

            // Load Saved Settings
            $('#name').val(localStorage.getItem('userName') || 'Syahril May Mubdi');
            $('#email').val(localStorage.getItem('userEmail') || 'example@email.com');
            $('#language').val(localStorage.getItem('language') || 'English (UK)');
            $('#prayerNotification').prop('checked', localStorage.getItem('prayerNotification') === 'true');
            $('#imsakNotification').prop('checked', localStorage.getItem('imsakNotification') === 'true');
            $('#location').val(localStorage.getItem('location') || '');
            $('#prayerMethod').val(localStorage.getItem('prayerMethod') || 'Muslim World League');
            $('#quranFontSize').val(localStorage.getItem('quranFontSize') || 'Medium');

            // Personal Details Form
            $('#personalDetailsForm').submit(function(e) {
                e.preventDefault();
                const name = $('#name').val();
                const email = $('#email').val();
                localStorage.setItem('userName', name);
                localStorage.setItem('userEmail', email);
                alert('Personal details saved successfully!');
            });

            // Password Form
            $('#passwordForm').submit(function(e) {
                e.preventDefault();
                const newPassword = $('#newPassword').val();
                const confirmPassword = $('#confirmPassword').val();
                if (newPassword === confirmPassword) {
                    localStorage.setItem('userPassword', newPassword);
                    alert('Password changed successfully!');
                    this.reset();
                } else {
                    alert('Passwords do not match!');
                }
            });

            // Language Selection
            $('#language').change(function() {
                const language = $(this).val();
                localStorage.setItem('language', language);
                alert('Language set to: ' + language);
            });

            // Notification Toggles
            $('#prayerNotification, #imsakNotification').change(function() {
                const id = this.id;
                const isChecked = $(this).is(':checked');
                localStorage.setItem(id, isChecked);
                alert(id + ' set to: ' + isChecked);
            });

            // Location Setting
            $('#setLocationBtn').click(function() {
                const location = $('#location').val();
                if (location) {
                    localStorage.setItem('location', location);
                    alert('Location set to: ' + location);
                } else {
                    alert('Please enter a location!');
                }
            });

            // Prayer Method Selection
            $('#prayerMethod').change(function() {
                const method = $(this).val();
                localStorage.setItem('prayerMethod', method);
                alert('Prayer calculation method set to: ' + method);
            });

            // Quran Font Size Selection
            $('#quranFontSize').change(function() {
                const fontSize = $(this).val();
                localStorage.setItem('quranFontSize', fontSize);
                alert('Quran font size set to: ' + fontSize);
            });

            // Support Form
            $('#supportForm').submit(function(e) {
                e.preventDefault();
                const subject = $('#subject').val();
                const message = $('#message').val();
                if (subject && message) {
                    alert('Support request sent: ' + subject);
                    this.reset();
                } else {
                    alert('Please fill in all fields!');
                }
            });
        });
    </script>
</body>

</html>