<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="assets/images/book_icon2.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="icon" href="/assets/images/book_icon2.png">
    
    <title>Buscabucky</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
                  <div class="col-lg-6 col-md-2 all des"> {{-- col-lg-8 --}}
                    <div class="product-item" style="margin-left: 20%"> {{-- 50% --}}
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

                        {{-- @if ($tag->tag == "No disponible")
                          <a href="/book/{{$book->id}}" class="btn btn-success disabled">Contactar vendedor</a>                            
                        @else
                          <a href="/book/{{$book->id}}" class="btn btn-success">Contactar vendedor</a>                                                        
                        @endif --}}                         
                      </div>
                    </div>
                  </div>  
                  <div class="col-lg-6 col-md-2 all des"> {{-- col-lg-8 --}}
                    <div class="product-item" style="margin-left: 20%"> {{-- 50% --}}                                                                    
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="section-heading" style="text-align: center;margin-top:20px">
                              <h2><strong> Contactar Vendedor</h2></strong>                              
                            </div>                                                       
                          </div>
                          <div class="col-md-12">
                            <div class="contact-form">
                              <form id="contact" action="/contactuss" method="post">
                                @csrf
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                      <div class="col-md-4">
                                        <label>Para</label>
                                      </div>
                                      <input name="email2" type="text" class="form-control" id="email2" Value="{{$book->user->email}}">
                                      @error('email2')
                                        <div class="alert alert-danger">{{ $message }}</div>                                                                                          
                                      @enderror
                                    </fieldset>
                                    <fieldset>
                                      <div class="col-md-4">
                                        <label>Nombre</label>
                                      </div>
                                      <input name="name" type="text" class="form-control" id="name" placeholder="Nombre completo" required=""
                                      value="{{Auth::User()->name}}">
                                      @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>                                                                                          
                                      @enderror
                                    </fieldset>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                      <div class="col-md-4">
                                        <label>Correo</label>
                                      </div>
                                      <input name="email" type="text" class="form-control" id="email" placeholder="Dirección de correo electrónico" required=""
                                      value="{{Auth::User()->email}}">

                                      @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>                                                                                          
                                      @enderror
                                    </fieldset>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                      <div class="col-md-4">
                                        <label>Asunto</label>
                                      </div>
                                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Asunto" required=""
                                      value="Me interesa el producto">
                                      @error('subject')
                                        <div class="alert alert-danger">{{ $message }}</div>                                                                                          
                                      @enderror
                                    </fieldset>
                                  </div>
                                  <div class="col-lg-12">
                                    <fieldset>
                                      <div class="col-md-4">
                                        <label>Mensaje</label>
                                      </div>
                                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mensaje" required=""></textarea>
                                      @error('message')
                                        <div class="alert alert-danger">{{ $message }}</div>                                                                                          
                                      @enderror
                                    </fieldset>
                                  </div>
                                  <div class="col-lg-12">
                                    <fieldset>
                                      <button type="submit" id="form-submit" class="filled-button">Enviar mensaje</button>
                                    </fieldset>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>                              
                        </div>
                      </div>                                                                                               
                    </div>
                  </div>                  
                </div>
            </div>
          </div>          
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

    @if (session('info'))
      <script>
        alert("{{session('info')}}");
      </script>
    @endif

  </body>

</html>
