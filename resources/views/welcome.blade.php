<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gerador de Certificado</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite('resources/css/app.css')

</head>
<body class="font-sans antialiased dark:bg-color2 dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-color2 dark:text-white/50">
    <div
        class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full px-6">
            <header class="text-color5">
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
                <div>
                    <div class="flex lg:justify-center lg:col-start-2">
                        @include('logo')
                    </div>
                </div>
            </header>

            <main class="mt-6">
                <section class="bg-gradient-to-br from-teal-400 to-color3 py-12 text-center">
                    <div class="mx-auto w-full p-28 flex flex-col gap-14">
                        <h1 class="text-6xl text-white">Consultar certificado:</h1>
                        <form method="post"
                              action="{{ route('certificate.search') }}">
                            @csrf
                            <input class="p-5 w-4/12 rounded-l-md border-none outline-none text-lg text-color5"
                                   type="text"
                                   id="search-certificate" name="search-certificate" placeholder="Autenticação:" required>
                            <button
                                class="p-5 rounded-r-md border-none bg-teal-900 text-white text-lg cursor-pointer hover:bg-teal-950"
                                type="submit">Consultar
                            </button>
                        </form>
                    </div>
                </section>
                <section class="py-5 text-center" id="resultSection">
                    <!-- Resultados serão exibidos aqui -->
                </section>
                <div class="text-color5 flex flex-col items-center gap-3">
                    <p class="text-3xl">Conheça nossos certificados</p>
                    <p>Escolha e personalize o seu certificado da sua maneira ou use um dos nossos. ;)</p>
                </div>
                <section class="my-6">
                    <div class="flex flex-wrap gap-8 justify-center">
                        @for($i = 0; $i < 8; $i++)
                            <div
                                class="flex flex-col items-center bg-white gap-6 dark:text-black p-6 rounded-lg shadow-md">
                                <div class="max-w-xs">
                                    <img src="/storage/certificate/Certificado%2001.png" alt="Certificado 01"
                                         class="rounded-md">
                                </div>
                                <div class="text-center mt-2">
                                    <strong>Certificado de Beleza</strong>
                                    <p>Um curso cheio de novidades que pode mudar sua vida, é isso aí!</p>
                                </div>
                                <a href=""
                                   class="block text-center text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 mt-2 mb-3 rounded-md shadow-md transition duration-200 ease-in-out">
                                    Crie agora mesmo seu certificado
                                </a>
                            </div>
                        @endfor
                    </div>
                </section>
                <section
                    class="flex gap-20 items-center justify-center mt-48 text-color5">
                    <div class="flex flex-col gap-2">
                        <strong>Links úteis</strong>
                        <a href="#" class="text-color5 hover:text-blue-400">Fale Conosco</a>
                        <a href="#" class="text-color5 hover:text-blue-400">Conquistas</a>
                    </div>
                    <div class="flex flex-col gap-2 mr-56 ml-56">
                        <strong>Nossos Conteúdos</strong>
                        <a href="#" class="text-color5 hover:text-blue-400">Instagram</a>
                        <a href="#" class="text-color5 hover:text-blue-400">Blog</a>
                    </div>
                    <div class="flex flex-col gap-2">
                        <strong>Suporte</strong>
                        <p>Entre em contato com nossa equipe de suporte.</p>
                        <a href="mailto:suporte@gmail.com" class="text-color5 hover:text-blue-400">suporte@gmail.com</a>
                    </div>
                </section>
            </main>

            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                &copy; Todos os direitos reservados à Gerador de Certificados.
            </footer>
        </div>
    </div>
</div>
</body>
<script src="https://unpkg.com/imask"></script>
<script>
    IMask(document.getElementById('search-certificate'), {
        mask: 'BRA-0000.0000.0000.000-00',
        lazy: false,
        placeholder: 'BRA-0000.0000.0000.000-00'
    });
</script>
</html>
