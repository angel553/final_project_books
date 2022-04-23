<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing Products</title>

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

    @if(Auth::guest())
      <x-header-layout> 
        <x-slot name="items">
          <li class="nav-item">
            <a class="nav-link" href="/"
                >Home
                <span class="sr-only">(current)</span>
            </a>
          </li>                    
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/products') }}"
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
        </x-slot> 
      </x-header-layout>      
    @else  
      <x-header-layout> 
        <x-slot name="items">
          <li class="nav-item">
            <a class="nav-link active" href="/"
                >Home
                <span class="sr-only">(current)</span>
            </a>
          </li>                    
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/products') }}"
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
        </x-slot> 
        @livewire('navigation-menu')
      </x-header-layout>       
    @endif

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
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
                      </tr>                                                
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


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
