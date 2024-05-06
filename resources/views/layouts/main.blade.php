<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Tailwind -->
    @vite('resources/css/app.css')

    <!-- Css do Projeto -->
    <link rel="stylesheet" href="/css/styles.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body class="h-screen bg-gray-300">

    <!-- NAVBAR -->
    <div class="container min-h-screen">
        <div class="sidebar w-64 min-h-screen flex flex-col bg-white p-6 rounded-r-3xl gap-5 relative active duration-300">
            <div class="flex menu-btn absolute -right-3.5 top-[3.5%] w-7 h-7 rounded-lg items-center justify-center bg-white pointer duration-300 text-gray-400 hover:text-black border-2 border-gray-300">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </div>
            <div class="head flex gap-5 pb-5 border-b border-gray-300 overflow-hidden flex">
                <div class="logo w-11 h-11 overflow-hidden">
                    <img src="/img/logo-sisemendas2.png" alt="Logo Sis Emendas" class="object-cover w-full">
                </div>
                <div class="user-details">
                    <p class="title text-xs font-medium	text-gray-400 uppercase">SIS Emendas</p>
                    <p class="name text-sm font-medium">Aspar</p>
                </div>
            </div>
            <div class="nav flex-1">
                <div class="menu pb-2.5 mb-5 border-b-2 border-gray-300">
                    <p class="title text-xs font-medium text-gray-300 uppercase mb-2.5">Main</p>
                    <ul class="list-none mb-1.5 relative">
                        <li class="rounded-lg">
                            <a href="#"
                                class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-3 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                                <ion-icon name="home-outline" size="small"></ion-icon>
                                <span class="text">Dashboard</span>
                            </a>
                        </li>

                        <li class="rounded-lg">
                            <a href="#"
                                class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-3 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                                <ion-icon name="person-outline" size="small"></ion-icon>
                                <span class="text flex-1">Audience</span>
                                <ion-icon name="chevron-down-outline" class="arrow text-[14px] mt-0.5 duration-300"></ion-icon>
                            </a>
                            <ul class="sub-menu ml-5 pl-5 pt-[5px] my-1 border-l border-gray-300 hidden">
                                <li class="rounded-lg my-1">
                                    <a href="#"
                                        class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                                        <span class="text flex-1">Users</span>
                                    </a>
                                </li>
                                <li class="rounded-lg my-1">
                                    <a href="#"
                                        class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                                        <span class="text flex-1">Subscriber</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="rounded-lg">
                            <a href="#"
                                class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-3 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                                <ion-icon name="document-text-outline" size="small"></ion-icon>
                                <span class="text">Posts</span>
                            </a>
                        </li>
                        <li class="rounded-lg">
                            <a href="#"
                                class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-3 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                                <ion-icon name="calendar-clear-outline" size="small"></ion-icon>
                                <span class="text">Schedules</span>
                            </a>
                        </li>

                        <li class="rounded-lg">
                            <a href="#"
                                class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-3 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                                <ion-icon name="stats-chart-outline" size="small"></ion-icon>
                                <span class="text flex-1">Income</span>
                                <ion-icon name="chevron-down-outline" class="arrow text-[14px] mt-0.5 duration-300"></ion-icon>
                            </a>
                            <ul class="sub-menu ml-5 pl-5 pt-[5px] my-1 border-l border-gray-300 hidden">
                                <li class="rounded-lg my-1">
                                    <a href="#"
                                        class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                                        <span class="text flex-1">Earnings</span>
                                    </a>
                                </li>
                                <li class="rounded-lg my-1">
                                    <a href="#"
                                        class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                                        <span class="text flex-1">Funds</span>
                                    </a>
                                </li>
                                <li class="rounded-lg my-1">
                                    <a href="#"
                                        class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                                        <span class="text flex-1">Declines</span>
                                    </a>
                                </li>
                                <li class="rounded-lg my-1">
                                    <a href="#"
                                        class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                                        <span class="text flex-1">Payouts</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu pb-2.5 mb-5 border-b-2 border-gray-300">
                    <p class="title text-xs font-medium text-gray-300 uppercase mb-2.5">Settings</p>
                    <ul class="list-none mb-1.5">
                        <li class="rounded-lg">
                            <a href="#"
                                class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-3 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                                <ion-icon name="settings-outline" size="small"></ion-icon>
                                <span class="text">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="menu pb-2.5 mb-5 border-b-2 border-gray-300">
                <p class="title text-xs font-medium text-gray-300 uppercase mb-2.5">Account</p>
                <ul class="list-none mb-1.5">
                    <li class="rounded-lg">
                        <a href="#"
                            class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-3 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                            <ion-icon name="information-circle-outline" size="small"></ion-icon>
                            <span class="text">Help</span>
                        </a>
                    </li>
                    <li class="rounded-lg">
                        <a href="#"
                            class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-3 py-2 rounded-lg hover:text-black hover:bg-gray-200 duration-300">
                            <ion-icon name="log-out-outline" size="small"></ion-icon>
                            <span class="text">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @yield('content')



    <div class="whats" data-aos="fade-up">
        <a href="https://wa.me/+556183466330" target="_blank">
            <img src="/img/whatsapp.png" width="70px" alt="Fale conosco pelo WhatsApp"
                title="Fale conosco pelo WhatsApp">
        </a>
    </div>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous"></script>

    <!-- Js do Projeto -->
    <script src="/js/script.js"></script>

    <!-- Ion Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>
