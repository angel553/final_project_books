<!DOCTYPE html>
<html lang="en">
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

        {{-- <title>Sixteen Clothing HTML Template</title> --}}
        <title>Buscabucky</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <!--

        TemplateMo 546 Sixteen Clothing

        https://templatemo.com/tm-546-sixteen-clothing

        -->

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css" />
        <link rel="stylesheet" href="assets/css/templatemo-sixteen.css" />
        <link rel="stylesheet" href="assets/css/owl.css" />        

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">        

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <body>
       
        {{-- <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->

        <!-- Header -->
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
        </header> --}}

        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->                

        <!-- Header -->
        @if(Auth::guest())
            <x-header-layout> 
                <x-slot name="items">
                    <li class="nav-item active">
                        <a class="nav-link" href="/"
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
                            >Sobre nosotros</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contactus') }}"
                            >Contáctanos</a
                        >
                    </li>
                </x-slot> 
            </x-header-layout>      
        @else   
            <x-header-layout> 
                <x-slot name="items">
                    <li class="nav-item active">
                        <a class="nav-link" href="/"
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
                </x-slot> 
                @livewire('navigation-menu')
            </x-header-layout>      
        @endif

        <!-- Page Content -->

        <!-- Banner Starts Here -->
        <div class="banner header-text">
            <div class="owl-banner owl-carousel">
                <div class="banner-item-01">
                    <div class="text-content">
                        <h4>Las mejores ofertas</h4>
                        <h2>Los mejores libros</h2>
                    </div>
                </div>
                <div class="banner-item-02">
                    <div class="text-content">
                        <h4>¿Estudias en Cucei y amas la lectura?</h4>
                        <h2>Este es tu lugar</h2>
                    </div>
                </div>
                <div class="banner-item-03">
                    <div class="text-content">
                        <h4>Tratos personales</h4>
                        <h2>Dentro de Cucei</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Ends Here -->

        {{-- Test del index --}}

        <div class="card-content">                   
            <!-- table striped -->
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Editorial</th>
                            <th>ISBN</th>
                            <th>Páginas</th>
                            <th>Fecha de publicación</th>
                            <th>Acción</th>
                            <th>Vendedor</th>
                            <th>Etiquetas</th>
                            <th>Archivo</th>                            
                        </tr>
                    </thead>
                    <tbody>                                                                                                  
                        @foreach ($books as $book)
                            <tr>                                    
                                <td>{{ $book->titulo }}</td>
                                <td>{{ $book->autor }}</td>
                                <td>{{ $book->editorial }}</td>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->paginas }}</td>  
                                <td>{{ $book->fecha }}</td>
                                <td>{{ $book->user->name}}</td>                                
                                <td>
                                  <a href="/book/{{ $book->id }}/edit" class="btn btn-info">Editar</a>
                                  {{-- <form action="/libro/{{ $libro->id }}" method="POST" class="form form-horizontal">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Eliminar" class="btn btn-danger">                                             
                                  </form> --}} 
                                </td>
                                <td> 
                                    @foreach ($book->tags as $tag)                                        
                                        {{ $tag->tag }} <br> 
                                    @endforeach
                                </td>
                                <td>{{$book->route_image}}</td>
                            </tr>                                                                          
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <a href="/book/create" class="btn btn-info">Agregar</a>        

        {{-- Fin del test index --}}

        
        <div class="latest-products">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Últimos productos</h2>
                            <a href="{{ url('/products') }}"
                                >Ver todos los productos
                                <i class="fa fa-angle-right"></i
                            ></a>
                        </div>
                    </div>
                    @foreach ($books as $book)                                                                     
                        <div class="col-md-4">
                            <div class="product-item">
                                {{-- <a href="#"><img src="assets/images/product_01.jpg" alt=""></a> --}}                
                                <a href="#"><img src=" {{Storage::url($book->route_image)}} " alt="" class="img-fluid rounded mx-auto d-block" style="height:400px;width: 300px;"></a>                
                                <div class="down-content">
                                <a href="#"><h4>{{$book->titulo}}</h4></a>
                                <h6>${{$book->precio}}</h6>
                                <p>{{$book->autor}}</p>
                                <p>{{$book->editorial}}</p>
                                
                                <a href="/book/{{$book->id}}" class="btn btn-secondary">Obtener detalles</a>
                                {{-- <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (12)</span> --}}                                    
                                </div>
                            </div>              
                        </div>
                    @endforeach
                    {{-- <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"
                                ><img src="assets/images/product_01.jpg" alt=""
                            /></a>
                            <div class="down-content">
                                <a href="#"><h4>Tittle goes here</h4></a>
                                <h6>$25.75</h6>
                                <p>
                                    Lorem ipsume dolor sit amet, adipisicing
                                    elite. Itaque, corporis nulla aspernatur.
                                </p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (24)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"
                                ><img src="assets/images/product_02.jpg" alt=""
                            /></a>
                            <div class="down-content">
                                <a href="#"><h4>Tittle goes here</h4></a>
                                <h6>$30.25</h6>
                                <p>
                                    Lorem ipsume dolor sit amet, adipisicing
                                    elite. Itaque, corporis nulla aspernatur.
                                </p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (21)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"
                                ><img src="assets/images/product_03.jpg" alt=""
                            /></a>
                            <div class="down-content">
                                <a href="#"><h4>Tittle goes here</h4></a>
                                <h6>$20.45</h6>
                                <p>
                                    Sixteen Clothing is free CSS template
                                    provided by TemplateMo.
                                </p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (36)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"
                                ><img src="assets/images/product_04.jpg" alt=""
                            /></a>
                            <div class="down-content">
                                <a href="#"><h4>Tittle goes here</h4></a>
                                <h6>$15.25</h6>
                                <p>
                                    Lorem ipsume dolor sit amet, adipisicing
                                    elite. Itaque, corporis nulla aspernatur.
                                </p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (48)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"
                                ><img src="assets/images/product_05.jpg" alt=""
                            /></a>
                            <div class="down-content">
                                <a href="#"><h4>Tittle goes here</h4></a>
                                <h6>$12.50</h6>
                                <p>
                                    Lorem ipsume dolor sit amet, adipisicing
                                    elite. Itaque, corporis nulla aspernatur.
                                </p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (16)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"
                                ><img src="assets/images/product_06.jpg" alt=""
                            /></a>
                            <div class="down-content">
                                <a href="#"><h4>Tittle goes here</h4></a>
                                <h6>$22.50</h6>
                                <p>
                                    Lorem ipsume dolor sit amet, adipisicing
                                    elite. Itaque, corporis nulla aspernatur.
                                </p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (32)</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        {{-- <div class="best-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Sobre Buscabucky</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="left-content">
                            <h4>Buscando libros económicos?</h4>
                            <p>
                                <a
                                    rel="nofollow"
                                    href="https://templatemo.com/tm-546-sixteen-clothing"
                                    target="_parent"
                                    >This template</a
                                >
                                is free to use for your business websites.
                                However, you have no permission to redistribute
                                the downloadable ZIP file on any template
                                collection website.
                                <a
                                    rel="nofollow"
                                    href="https://templatemo.com/contact"
                                    >Contact us</a
                                >
                                for more info.
                            </p>
                            <ul class="featured-list">
                                <li>
                                    <a href="#">Lorem ipsum dolor sit amet</a>
                                </li>
                                <li>
                                    <a href="#"
                                        >Consectetur an adipisicing elit</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        >It aquecorporis nulla aspernatur</a
                                    >
                                </li>
                                <li>
                                    <a href="#">Corporis, omnis doloremque</a>
                                </li>
                                <li>
                                    <a href="#">Non cum id reprehenderit</a>
                                </li>
                            </ul>
                            <a href="about.html" class="filled-button"
                                >Read More</a
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                            <img src="assets/images/feature-image.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-content">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>
                                        Creative &amp; Unique
                                        <em>Sixteen</em> Products
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Itaque corporis amet
                                        elite author nulla.
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="filled-button"
                                        >Purchase Now</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <x-footer-layout>
        </x-footer-layout>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Additional Scripts -->
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/isotope.js"></script>
        <script src="assets/js/accordions.js"></script>

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
