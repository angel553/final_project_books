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
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="/assets/css/owl.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">        

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}" defer></script>

  </head>

  <body>

    
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
              
              {{-- Policies --}}
              @can('viewAny', App\Models\Book::class)
                <li class="nav-item">
                   <a class="nav-link" href="{{ url('/booksadmin') }}"
                       >Libros</a
                   >
                </li>
              @endcan
              
          </x-slot> 
          @livewire('navigation-menu')
      </x-header-layout>      
    @endif

    <!-- Page Content -->
    <div class="{{-- page-heading products-heading header-text --}}">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>sixteen products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">          
          <div class="col-md-12">
            <div class="filters-content">
                                                                                   
                <div class="row grid">
                  <div class="col-lg-8 col-md-2 all des"> {{-- col-lg-8 --}}
                    <div class="product-item" style="margin-left: 50%"> {{-- 50% --}}
                      <a href="#"><img class="img-fluid rounded mx-auto d-block img-thumbnail" src="{{Storage::url($book->route_image)}}" alt="Imagen del producto" style="height: 400px;width: 380px"></a>
                      {{-- <a href="/book/{{$book->id}}" class="btn btn-secondary">Detalle</a> --}}
                      <div class="down-content">
                        <a href="#"></a>
                        <h4><b>{{$book->titulo}}</b></h4>
                        <h6><strong>${{$book->precio}}</strong></h6>
                        <p><b>Autor: </b>{{$book->autor}}</p>
                        <p><b>Editorial: </b>{{$book->editorial}}</p>
                        <p><b>ISBN: </b>{{$book->isbn}}</p>
                        <p><b>Páginas: </b>{{$book->paginas}}</p>
                        <p><b>Fecha: </b>{{$book->fecha}}</p>
                        <p><b>Disponibilidad: </b>
                          @foreach ($book->tags as $tag)                                        
                            {{ $tag->tag }} 
                          @endforeach
                        </p>
                        <p><b>Vendedor: </b>{{$book->user->name}}</p>                                               
                        
                        {{-- @foreach ($book->tags as $tag)                                                                                                                    
                          @if ($tag->tag == "Venta" || $tag->tag == "Intercambio")
                            <a href="/book/{{$book->id}}" class="btn btn-success">Contactar vendedor</a>                                                        
                          @else
                            <a href="/book/{{$book->id}}" class="btn btn-success disabled">Contactar vendedor</a>                            
                          @endif                                                       
                        @endforeach --}}     

                        @if ($tag->tag == "No disponible")
                          <a href="/book/{{$book->id}}" class="btn btn-success disabled">Contactar vendedor</a>                            
                        @else
                          <a href="/book/{{$book->id}}" class="btn btn-success">Contactar vendedor</a>                                                        
                        @endif 

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
                </div>

            </div>
          </div>
          {{-- <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div> --}}
        </div>
      </div>
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


    <script language = "/text/Javascript"> 
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
