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

<body class="h-screen">

    <!-- NAVBAR -->
    <header class="bg-white px-8 bg-white border-b border-gray-100">
        <nav class="flex justify-between items-center mx-auto mx-8 py-4">
            <div data-aos="fade-right">
                <a href="/">
                    <img class="cursor-pointer hidden sm:block" src="/img/logo-aspar.png" alt="Logo Sis Emendas">
                </a>
            </div>
            <div
                class="menu nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li class="hover:text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">
                        <a href="/">Início</a>
                    </li>
                    <li class="hover:text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">
                        <a href="#empresa">Empresa</a>
                    </li>
                    <li class="hover:text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">
                        <a href="#servicos">Serviços</a>
                    </li>
                    <li class="hover:text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">
                        <a href="#cases">Cases</a>
                    </li>
                    <li class="hover:text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">
                        <a href="#tecnologias">Tecnologias</a>
                    </li>
                    <li class="hover:text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">
                        <a href="/contato">Contato</a>
                    </li>
                    <li class="hover:text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">
                        <a href="/acessibilidade">Acessibilidades</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <a href="/login">
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


    <!-- INÍCIO -->
    <section class="p-2" data-aos="fade-down">
        <div class="mt-2 px-8">
            <div class="flex flex-col sm:flex-row justify-center items-center">

                <div
                    class="w-full h-50 md:h-full sm:h-96 p-6 bg-gray-800 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2">
                    <h5 class="text-2xl py-1 font-bold text-white mb-4">Fale Conosco</h5>
                    <div class="bg-gray-700 rounded">
                        <div class="contact-details text-white font-medium leading-loose px-4 mb-4">
                            <h2 class="text-2xl font-bold space-y-2 text-gray-400 leading-loose"><ion-icon
                                    name="mail-outline" size="small" class="mr-2"></ion-icon>E-mail</h2>
                            <span class="cursor-pointer hover:text-blue-600 transition ease-in-out delay-150"><a href="mailto:atendimento@aspar.com.br">atendimento@aspar.com.br</a></span>
                        </div>
                        <div class="contact-details text-white font-medium leading-loose px-4 mb-4">
                            <h2 class="text-2xl font-bold space-y-2 text-gray-400 leading-loose"><ion-icon
                                    name="logo-whatsapp" size="small" class="mr-2"></ion-icon>WhatsApp</h2>
                            <span class="cursor-pointer hover:text-blue-600 transition ease-in-out delay-150"><a href="https://wa.me/+5561983184699" target="_blank">(61) 98318-4699</span>
                        </div>
                        <div class="contact-details text-white font-medium leading-loose px-4 mb-4">
                            <h2 class="text-2xl font-bold space-y-2 text-gray-400 leading-loose mb-2"><ion-icon name="globe-outline" size="small" class="mr-2"></ion-icon>Redes Sociais</h2>
                            <span class="cursor-pointer hover:text-blue-600 transition ease-in-out delay-150"><a href="https://www.instagram.com/asparassessoria/" target="_blank">
                                <ion-icon name="logo-instagram" size="large" class="mr-2"></ion-icon>
                            </span>
                            <span class="cursor-pointer hover:text-blue-600 transition ease-in-out delay-150"><a href="https://github.com/Aspar-Assessoria-e-Tecnologia" target="_blank">
                                <ion-icon name="logo-github" size="large" class="mr-2"></ion-icon>
                            </span>
                            <span class="cursor-pointer hover:text-blue-600 transition ease-in-out delay-150"><a href="#" target="_blank">
                                <ion-icon name="logo-linkedin" size="large" class="mr-2"></ion-icon>
                            </span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Footer -->
    <section id="footer">
        <div class="w-full bg-gradient-to-tl from-gray-900 via-black to-sky-950 to-95% text-gray-50">
            <div class="xl:px-40 pb-12 lg:px-20 md:px-10 sm:px-5 px-10">
                <div class="w-full pt-12 flex flex-col sm:flex-row space-y-2 justify-start">
                    <div class="w-full sm:w-2/5 pr-6 flex flex-col space-y-4">
                        <div>
                            <a href="/">
                                <img class="cursor-pointer" src="/img/logo-aspar-branca.png" alt="Logo Sis Emendas">
                            </a>
                            <p class="text-white opacity-60 italic font-semibold">Soluções inovadoras para o seu
                                sucesso.</p>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/5 flex flex-col space-y-4">
                        <a href="/"
                            class="opacity-60 hover:text-lime-500 inline-flex transition duration-300 ease-in-out">Início</a>
                        <a href="/#empresa"
                            class="opacity-60 hover:text-lime-500 inline-flex transition duration-300 ease-in-out">Empresa</a>
                        <a href="/#servicos"
                            class="opacity-60 hover:text-lime-500 inline-flex transition duration-300 ease-in-out">Serviços</a>
                        <a href="/#cases"
                            class="opacity-60 hover:text-lime-500 inline-flex transition duration-300 ease-in-out">Cases</a>
                    </div>
                    <div class="w-full sm:w-1/5 flex flex-col space-y-4">
                        <a href="/#tecnologia"
                            class="opacity-60 hover:text-lime-500 inline-flex transition duration-300 ease-in-out">Tecnologia</a>
                        <a href="/contatos"
                            class="opacity-60 hover:text-lime-500 inline-flex transition duration-300 ease-in-out">Contatos</a>
                        <a href="/acessibilidade"
                            class="opacity-60 hover:text-lime-500 inline-flex transition duration-300 ease-in-out">Acessibilidade</a>
                        <a href="/login"
                            class="opacity-60 hover:text-lime-500 inline-flex transition duration-300 ease-in-out">SIS
                            Emendas</a>
                    </div>
                    <div class="w-full sm:w-1/5 pt-6 flex items-end mb-1">
                        <div class="flex flex-row space-x-4">
                            <a href="https://www.instagram.com/asparassessoria/" target="_blank"
                                class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                                <ion-icon name="logo-instagram" class="w-6 h-6"></ion-icon>
                            </a>
                            <a href="https://api.whatsapp.com/send/?phone=%2B5561983184699&text&type=phone_number&app_absent=0"
                                target="_blank"
                                class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                                <ion-icon name="logo-whatsapp" class="w-6 h-6"></ion-icon>
                            </a>
                            <a href="https://github.com/Aspar-Assessoria-e-Tecnologia" target="_blank"
                                class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                                <ion-icon name="logo-github" class="w-6 h-6"></ion-icon>
                            </a>
                            <a href="#" target="_blank"
                                class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                                <ion-icon name="logo-linkedin" class="w-6 h-6"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="opacity-60 pt-2">
                    <p>&copy; Aspar 2024. Todos os direitos reservados</p>
                </div>
            </div>
        </div>
    </section>

    <div class="whats" data-aos="fade-up">
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
