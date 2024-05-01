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

    <!-- Js do Projeto -->
    <script src="/js/scripts.js"></script>
</head>

<body class="bg-white text-black">
    <header class="container mx-auto px-4 py-6 flex items-center justify-between">
        <div class="shrink-0 flex items-center">
            <a href="{{ route('dashboard') }}">
                <x-application-mark class="block h-9 w-auto" />
            </a>
        </div>
        <nav>
            <div class="flex items-center">
                <h1>Seja bem-vindo!</h1>
            </div>
        </nav>
        <nav>
            <ul>
                <li>
                    <a href="/login"
                        class="rounded-full px-3 py-2 font-semibold bg-white bg-opacity-10 flex items-center group">
                        <span class="mr-2">Sign in</span>
                        <svg class="stroke-current" width="10" height="10" stroke-width="2" viewBox="0 0 10 10"
                            aria-hidden="true">
                            <g fill-rule="evenodd">
                                <path class="opacity-0 group-hover:opacity-100 transition ease-in-out duration-200"
                                    d="M0 5h7"></path>
                                <path
                                    class="opacity-100 group-hover:transform group-hover:translate-x-1 transition ease-in-out duration-200"
                                    d="M1 1l4 4-4 4"></path>
                            </g>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Script Ion-Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
