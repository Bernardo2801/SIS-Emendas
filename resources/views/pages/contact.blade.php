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

<body class="relative h-screen">

    <!-- NAVBAR -->
    <header class="bg-white px-8 bg-white border-b border-gray-100">
        <nav class="flex justify-between items-center mx-auto mx-8 py-4">
            <div data-aos="fade-right">
                <a href="{{ route('welcome') }}">
                    <img class="cursor-pointer hidden sm:block" src="/img/logo-aspar.png" alt="Logo Sis Emendas">
                </a>
            </div>
            <div
                class="menu nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li class="hover:text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">
                        <a href="{{ route('welcome') }}">Início</a>
                    </li>
                    <li class="hover:text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">
                        <a href="{{ route('contact') }}">Contato</a>
                    </li>
                    <li class="hover:text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">
                        <a href="{{ route('accessibility') }}">Acessibilidade</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <a href="{{ route('login') }}">
                    <button
                        class="text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-medium leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">SIS
                        Emendas</button>
                </a>

                <ion-icon onclick="onToggleMenu(this)" name="menu"
                    class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>

    <!-- Inicio -->
    <section class="mt-4" data-aos="fade-down" id="inicio">
        <div class="mt-8 px-8 sm:px-24 md:px-60 lg:px-60 xl:px-60 2xl:px-60 grid grid-cols-1 xl:grid-cols-2 gap-6 py-4">
            <div class="w-full rounded-xl flex flex-col justify-center">
                <h1 class="text-2xl py-1 font-bold">Fale consco</h1>
                <h2 class="text-lg py-1 font-semibold">Email</h2>
                <a href="mailto:atendimento@aspar.com.br" class="w-max hover:text-blue-600">atendimento@aspar.com.br</a>
                <h2 class="text-lg py-1 font-semibold">WhatsApp</h2>
                <a href="https://wa.me/+5561983184699" class="w-max hover:text-blue-600">(61) 98318-4699</a>
                <h2 class="text-lg py-1 font-semibold">Instagram</h2>
                <a href="https://instagram.com/asparassessoria" class="w-max hover:text-blue-600">@asparassessoria_</a>

            </div>
            <div
                class="w-full py-4 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <img class="rounded-xl" src="/img/aspar-foto4.png" alt="Logo Sis Emendas">
            </div>
        </div>
    </section>

    <!-- WhatsApp -->
    <div class="whats">
        <a href="https://wa.me/+5561983184699" target="_blank">
            <img src="/img/whatsapp.png" width="70px" alt="Fale conosco pelo WhatsApp"
                title="Fale conosco pelo WhatsApp">
        </a>
    </div>

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
