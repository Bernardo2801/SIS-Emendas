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

<body class="h-screen bg-white">


    <!-- NAVBAR -->
    <header class="bg-white px-8 bg-white border-b border-gray-100">
        <nav class="flex justify-between items-center mx-auto mx-8 py-4">
            <div data-aos="fade-right">
                <a href="{{ route('dashboard') }}">
                    <img class="cursor-pointer hidden sm:block" src="/img/logo-sisemendas.png" alt="Logo Sis Emendas">
                </a>
            </div>
            <div class="menu nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li class="hover:text-black inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">
                        <a href="{{ route('dashboard') }}">Início</a>
                    </li>
                    <li class="rounded-lg">
                        <a href="#">
                            <span class="text flex-1 hover:text-black inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out" data-aos="fade-right">Emendas<ion-icon name="chevron-down-outline" class="arrow text-[14px] mt-0.5 duration-300"></ion-icon></span>
                        </a>
                        <ul class="sub-menu ml-5 pl-5 pt-[5px] my-1 border-l border-gray-300 hidden">
                            <li class="my-1 hover:text-black inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out">
                                <a href="/indicacoes-gerais"
                                    class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg hover:text-black duration-300">
                                    <span class="text flex-1">Indicações gerais</span>
                                </a>
                            </li>
                            <li class="my-1 hover:text-black items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out">
                                <a href="/consulta-cidade-beneficiario"
                                    class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg hover:text-black duration-300">
                                    <span class="text flex-1">Consulta por Cidade/Beneficiário</span>
                                </a>
                            </li>
                            <li class="my-1 hover:text-black items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out">
                                <a href="/consulta-ministerio-tematica"
                                    class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg hover:text-black duration-300">
                                    <span class="text flex-1">Consulta por Ministério/Temática</span>
                                </a>
                            </li>
                            <li class="my-1 hover:text-black items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out">
                                <a href="/consulta-ficha-processo"
                                    class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg hover:text-black duration-300">
                                    <span class="text flex-1">Consulta Ficha Processo</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="rounded-lg">
                        <a href="#" class="">
                            <span class="text flex-1 hover:text-black inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out" data-aos="fade-right">Votação<ion-icon name="chevron-down-outline" class="arrow text-[14px] mt-0.5 duration-300"></ion-icon></span>
                        </a>
                        <ul class="sub-menu ml-5 pl-5 pt-[5px] my-1 border-l border-gray-300 hidden">
                            <li class="my-1 hover:text-black inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out">
                                <a href="/votacoes-deputados"
                                    class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg hover:text-black duration-300">
                                    <span class="text flex-1">Votações Deputados</span>
                                </a>
                            </li>
                            <li class="my-1 hover:text-black items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out">
                                <a href="/votacoes-vereadores"
                                    class="flex self-center gap-2.5 text-sm font-medium text-gray-400 no-underline px-2.5 py-2 rounded-lg hover:text-black duration-300">
                                    <span class="text flex-1">Votações Vereadores</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <a href="{{ route('profile.show') }}">
                    <button
                        class="text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-medium leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">Meu perfil</button>
                </a>


                <ion-icon onclick="onToggleMenu(this)" name="menu"
                    class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>


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


        <script>
            const tabs = document.querySelectorAll('[data-tab-target]');
            const activeClass = 'border-lime-600';

            // Select first tab by default
            tabs[0].classList.add(activeClass);
            document.querySelector('#tab1').classList.remove('hidden');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const targetContent = document.querySelector(tab.dataset.tabTarget);
                    // console.log(targetContent)

                    document.querySelectorAll('.tab-content').forEach(content => content.classList.add(
                        'hidden'));
                    targetContent.classList.remove('hidden');

                    // Remove active class from all tabs
                    document.querySelectorAll('.border-lime-600').forEach(activeTab => activeTab.classList
                        .remove(activeClass));

                    // Add active class to clicked tab
                    console.log(tab)
                    tab.classList.add(activeClass);
                });
            });
        </script>

        <script>
            const navLinks = document.querySelector('.nav-links')

            function onToggleMenu(e) {
                e.name = e.name === 'menu' ? 'close' : 'menu'
                navLinks.classList.toggle('top-[9%]')
            }
        </script>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 1000,
            });
        </script>

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
