<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link
            href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
            rel="stylesheet"
        />

        <link rel="icon" href="assets/images/book_icon2.png">

        {{-- <title>Sixteen Clothing HTML Template</title> --}}
        <title>Buscabucky</title>

        <!-- Bootstrap core CSS -->
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="/assets/css/fontawesome.css" />
        <link rel="stylesheet" href="/assets/css/templatemo-sixteen.css" />
        <link rel="stylesheet" href="/assets/css/owl.css" />        

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">        

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>

    <body>             
        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->  

        <header class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/"
                        ><h2>Busca <em>Bucky</em></h2></a
                    >
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarResponsive"
                        aria-controls="navbarResponsive"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="/"
                                    >Inicio
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/products') }}"
                                    >Productos</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about') }}"
                                    >Sobre Nosotros</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contactus') }}"
                                    >Contáctanos</a
                                >
                            </li>
                            <li class="nav-item">
                                @if (Route::has('login'))
                                    <div class="py-0">
                                        @auth
                                        <a
                                            href="{{ url('/dashboard') }}"
                                            class="text-sm text-gray-700 dark:text-gray-500 underline"
                                            ></a
                                        >
                                        @else
                                        <a
                                            href="{{ route('login') }}"
                                            class="nav-link btn btn-outline-secondary"
                                            >Log in</a
                                        >
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                        <a
                                            href="{{ route('register') }}"
                                            class="nav-link btn btn-danger"
                                            >Register</a
                                        >
                                            </li>
                                        @endif @endauth
                                    </div>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>      
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <x-footer-layout>
        </x-footer-layout>

        <!-- Bootstrap core JavaScript -->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Additional Scripts -->
        <script src="/assets/js/custom.js"></script>
        <script src="/assets/js/owl.js"></script>
        <script src="/assets/js/slick.js"></script>
        <script src="/assets/js/isotope.js"></script>
        <script src="/assets/js/accordions.js"></script>

        <script language="text/Javascript">
            cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
            function clearField(t) {
                //declaring the array outside of the
                if (!cleared[t.id]) {
                    // function makes it static and global
                    cleared[t.id] = 1; // you could use true and false, but that's more typing
                    t.value = ""; // with more chance of typos
                    t.style.color = "#fff";
                }
            }
        </script>
    </body>
</html>
