<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
        <title>Sixteen Clothing HTML Template</title>
    
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--
    
    TemplateMo 546 Sixteen Clothing
    
    https://templatemo.com/tm-546-sixteen-clothing
    
    -->

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
        <link rel="stylesheet" href="assets/css/owl.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
                        
        {{--
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        --}}
    </head>
    <body>        
        <header class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html"
                        ><h2>Sixteen <em>Clothing</em></h2></a
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
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html"
                                    >Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="products.html"
                                    >Our Products</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html"
                                    >About Us</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html"
                                    >Contact Us</a
                                >
                            </li>
                            <li class="nav-item">
                                @if (Route::has('login'))
                                    <div class="py-0">
                                        @auth
                                        <a
                                            href="{{ url('/dashboard') }}"
                                            class="text-sm text-gray-700 dark:text-gray-500 underline"
                                            >Dashboard</a
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
    </body>
</html>
