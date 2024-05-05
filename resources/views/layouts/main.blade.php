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
        <div class="sidebar w-64 min-h-screen flex flex-col bg-white p-6 rounded-r-3xl gap-5">
            <div class="head flex gap-5 pb-5 border-b border-gray-300 overflow-hidden">
                <div class="logo">
                    <img src="/img/logo-sisemendas.png" alt="Logo Sis Emendas" class="object-cover w-full">
                </div>
            </div>
            <div class="nav">
                <div class="menu">
                    <p class="title text-xs font-medium text-gray-300 uppercase mb-2.5">Main</p>
                    <ul class="list-none mb-1.5">
                        <li class="rounded-lg">
                            <a href=""
                                class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-3 py-2 rounded-lg">
                                <ion-icon name="home-outline" size="small"></ion-icon>
                                <span class="text">Dashboard</span>
                            </a>
                        </li>

                        <li class="rounded-lg">
                            <a href="#"
                                class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-3 py-2 rounded-lg">
                                <ion-icon name="person-outline" size="small"></ion-icon>
                                <span class="text flex-1">Audience</span>
                                <ion-icon name="chevron-down-outline" class="arrow text-[14px] mt-0.5 duration-300"></ion-icon>
                            </a>
                            <ul class="sub-menu ml-5 pl-5 pt-[5px] my-1 border-l border-gray-300 hidden">
                                <li class="rounded-lg my-1">
                                    <a href=""
                                        class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg">
                                        <span class="text flex-1">Users</span>
                                    </a>
                                </li>
                                <li class="rounded-lg my-1">
                                    <a href=""
                                        class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg">
                                        <span class="text flex-1">Subscriber</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="rounded-lg">
                            <a href=""
                                class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-3 py-2 rounded-lg">
                                <ion-icon name="document-text-outline" size="small"></ion-icon>
                                <span class="text">Posts</span>
                            </a>
                        </li>
                        <li class="rounded-lg">
                            <a href=""
                                class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-3 py-2 rounded-lg">
                                <ion-icon name="calendar-clear-outline" size="small"></ion-icon>
                                <span class="text">Schedules</span>
                            </a>
                        </li>

                        <li class="rounded-lg">
                            <a href="#"
                                class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-3 py-2 rounded-lg">
                                <ion-icon name="stats-chart-outline" size="small"></ion-icon>
                                <span class="text flex-1">Income</span>
                                <ion-icon name="chevron-down-outline" class="arrow text-[14px] mt-0.5 duration-300"></ion-icon>
                            </a>
                            <ul class="sub-menu ml-5 pl-5 pt-[5px] my-1 border-l border-gray-300 hidden">
                                <li class="rounded-lg my-1">
                                    <a href=""
                                        class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg">
                                        <span class="text flex-1">Earnings</span>
                                    </a>
                                </li>
                                <li class="rounded-lg my-1">
                                    <a href=""
                                        class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg">
                                        <span class="text flex-1">Funds</span>
                                    </a>
                                </li>
                                <li class="rounded-lg my-1">
                                    <a href=""
                                        class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg">
                                        <span class="text flex-1">Declines</span>
                                    </a>
                                </li>
                                <li class="rounded-lg my-1">
                                    <a href=""
                                        class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg">
                                        <span class="text flex-1">Payouts</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
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
