<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Buscabucky</title>

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
    <link rel="stylesheet" href="assets/css/others.css" /> {{-- Mio --}}

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

    <!-- Header -->
    @if(Auth::guest())
      <x-header-layout> 
        <x-slot name="items">
            <li class="nav-item">
                <a class="nav-link" href="/"
                    >Inicio
                    <span class="sr-only">(current)</span>
                </a>
            </li>                    
            <li class="nav-item active">
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
              <li class="nav-item">
                  <a class="nav-link" href="/"
                      >Inicio
                      <span class="sr-only">(current)</span>
                  </a>
              </li>                    
              <li class="nav-item active">
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
                    <a class="nav-link" href="{{ url('/booksadmin') }}"
                        >Libros</a
                    >
                </li>
              
          </x-slot> 
          @livewire('navigation-menu')
      </x-header-layout>      
    @endif

    <!-- Page Content -->
    <div class="page-heading products-heading2 header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">              
              <h4>Las mejores ofertas</h4>
              <h2>Los mejores libros</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    {{-- <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$18.25</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (12)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$16.75</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
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
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_03.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$32.50</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
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
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_04.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$24.60</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
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
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_05.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$18.75</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (60)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_06.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$12.50</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (72)</span>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="color: red">Todos los productos</h2>              
            </div>
          </div>
          @foreach ($books as $book)                                                                     
            <div class="col-md-4">
              <div class="product-item">
                {{-- <a href="#"><img src="assets/images/product_01.jpg" alt=""></a> --}}                                          
                <a href="#"><img src=" {{Storage::url($book->route_image)}} " alt="" class="img-fluid rounded mx-auto d-block" style="height:400px;width: 350px;"></a>                
                <div class="down-content">
                  <a href="#"><h4>{{$book->titulo}}</h4></a>
                  <h6>${{$book->precio}}</h6>
                  <p>{{$book->autor}}</p>
                  <p>{{$book->editorial}}</p>  
                  <p>
                    @foreach ($book->tags as $tag)                                        
                        {{ $tag->tag }} 
                    @endforeach
                </p>                
                  
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
        </div>
      </div>
    </div>
    
    
    
    
    
    {{-- <div class="product-item">
      @foreach ($books as $book)                                                                     
        <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
        <a href="/book/{{$book->id}}" class="btn btn-secondary">Detalle</a>
        <div class="down-content">
          <a href="#"><h4>{{$book->titulo}}</h4></a>
          <h6>${{$book->precio}}</h6>
          <p>{{$book->autor}}</p>
          <p>{{$book->editorial}}</p>
          <p>{{$book->isbn}}</p>
          <ul class="stars">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
          </ul>
          <span>Reviews (12)</span>
        </div>
      @endforeach
    </div>  --}}    
    
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


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
