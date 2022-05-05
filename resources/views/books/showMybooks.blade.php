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
    <link rel="stylesheet" href="assets/css/others.css">

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
              <a class="nav-link" href="about.html"
                  >Sobre nosotros</a
              >
          </li>
          <li class="nav-item">
              <a class="nav-link" href="contact.html"
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
                <a class="nav-link" href="about.html"
                    >Sobre Nosotros</a
                >
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html"
                    >Contáctanos</a
                >
            </li>
        </x-slot> 
        @livewire('navigation-menu')
      </x-header-layout>      
    @endif    
    
    <div class="page-heading_">
      <div class="page-content">
        <h2 style="color: red">Todos las publicaciones</h2>
      </div>
    </div>  

    {{-- Flash Message --}}    
    <div class="container">      
      <div id="col-md-7 offset-3 mt-4">
        @include('flashMessage')
        @yield('content')
      </div>
    </div> 
    {{-- <div class="alert alert-success">
      @if (session('success'))
          {{ session('success') }}
      @endif
    </div>  --}}

  <div class="page-content">      
      {{-- TABLA --}}
      <section class="section">
        <div class="row py-8">
            {{-- <div class="col-auto col-lg-5 ">
            </div>  --}}                                                                                
            <div class="col-auto col-lg-5">
            </div>             
            <div class=" px-8">                                           
                <div class="card">
                    <div class="card-body px-6 py-2-8 ">
                        <a href="/book/create">
                            {{-- <span class="glyphicon glyphicon-search"></span> --}}
                            <h6 class="font-extrabold  btn btn-primary ">Agregar Nueva Publicación</h6>
                        </a>                        
                    </div>
                </div>
            </div>
        </div>
          <div class="row" id="table-striped">
              <div class="col-12">
                  <div class="card">
                      {{-- <div class="card-header">
                          <h4 class="card-title">Libros actuales</h4>
                      </div> --}}
                      <div class="card-content">                   
                          <!-- table striped -->
                          <div class="table-responsive">
                              <table class="table table-striped mb-0">
                                  <thead>
                                      <tr>
                                          <th>Image</th>
                                          <th>Título</th>
                                          <th>Autor</th>
                                          <th>Editorial</th>
                                          <th>ISBM</th>
                                          <th>Páginas</th>
                                          <th>Fecha</th>
                                          <th>Precio</th>
                                          <th>Disponibilidad</th>                                          
                                          <th>Acción</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($books as $book)                                                                     
                                      <tr>
                                        <td><img src=" {{Storage::url($book->route_image)}} " alt="" class="img-fluid" style="width:80px;height:80px"></td>
                                        <td>{{$book->titulo}}</td>
                                        <td>{{$book->autor}}</td>
                                        <td>{{$book->editorial}}</td>
                                        <td>{{$book->isbn}}</td>
                                        <td>{{$book->paginas}}</td>
                                        <td>{{$book->fecha}}</td>
                                        <td>${{$book->precio}}</td>                                        
                                        <td>
                                            @foreach ($book->tags as $tag)                                        
                                                {{ $tag->tag }} <br> 
                                            @endforeach
                                        </td>                                        
                                        <td><a href="/book/{{$book->id}}/edit" class="btn btn-success">Editar</a>
                                            <form action="/book/{{$book->id}}" method="POST" class="form form-horizontal">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Eliminar" class="btn btn-danger" style="background-color: #dc3545">                                             
                                            </form>                                            
                                        </td>
                                      </tr>                                      
                                    @endforeach                                      
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>

    {{-- <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2022 <span style="color: red">Proyecto Final
            
                - Programación para internet: 2022A</span></p>
            </div>
          </div>
        </div>
      </div>
    </footer> --}}

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
