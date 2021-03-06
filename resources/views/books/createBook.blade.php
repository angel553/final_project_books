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

        <link rel="icon" href="/assets/images/book_icon2.png">

        <title>Buckysearch</title>

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
                            >Cont??ctanos</a
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
                            >Cont??ctanos</a
                        >
                    </li>                                                    
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
        
        {{-- Test del create --}}

        <br><br><br><br><br>
        <div class="col-md-12 col-14">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Agregar Libro</h4>
              </div>
              <div class="card-content">
                  <div class="card-body"> 
                      @isset($book)
                          <form class="form form-horizontal" action="/book/{{ $book->id }}" method="POST" enctype="multipart/form-data"> {{-- update --}}                                                            
                              @method('PATCH')                                                                                               
                      @else
                          <form class="form form-horizontal" action="/book" method="POST" enctype="multipart/form-data">                            
                      @endisset                           
                      {{-- <form class="form form-horizontal" action="/libro" method="POST"> --}}
                          @csrf
                          <div class="form-body">                                    
                              <div class="row">
                                  <div class="col-md-4">
                                      <label>T??tulo</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="titulo" class="form-control" name="titulo"
                                          placeholder="T??tulo" value="{{ isset($book) ? $book->titulo : old('titulo') }} ">
                                      @error('titulo')
                                          <div class="alert alert-danger">{{ $message }}</div>                                                                                          
                                      @enderror
                                  </div>
                                  <div class="col-md-4">
                                      <label>Autor</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="autor" class="form-control" name="autor"
                                          placeholder="Autor" value="{{ isset($book) ? $book->autor : old('autor') }}">
                                      @error('autor')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="col-md-4">
                                      <label>Editorial</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="editorial" class="form-control" name="editorial"
                                          placeholder="Editorial" value="{{ isset($book) ? $book->editorial : old('editorial') }}">
                                      @error('editorial')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="col-md-4">
                                      <label>ISBN</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="number" id="isbn" class="form-control" name="isbn"
                                          placeholder="ISBN" value="{{ isset($book) ? $book->isbn : old('isbn') }}"
                                          min="0000000000000">
                                      @error('isbn')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="col-md-4">
                                  <label>P??ginas</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="number" id="paginas" class="form-control" name="paginas"
                                          placeholder="P??ginas" value="{{ isset($book) ? $book->paginas : old('paginas') }}"
                                          min="0" max="9999">
                                      @error('paginas')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="col-md-4">
                                    <label>Fecha de publicaci??n</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                    <input type="date" id="contact-info" class="form-control" name="fecha"
                                        placeholder="Fecha de publicaci??n" value="{{ isset($book) ? $book->fecha : old('fecha') }}" 
                                        max="2022-05-20">
                                    @error('fecha')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                  </div>
                                  <div class="col-md-4">
                                    <label>Precio</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                    <input type="number" id="contact-info" class="form-control" name="precio"
                                        placeholder="Precio" value="{{ isset($book) ? $book->precio : old('precio') }}"
                                        min="0" max="9999">
                                    @error('precio')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                  </div>
                                  <div class="col-md-4">
                                    <label>Etiqueta</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <select name="etiqueta_id[]" multiple>                                        
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}" {{ isset($book) && array_search($tag->id, $book->tags->pluck('id')->toArray()) !== false ? ' selected' : '' }}>{{ $tag->tag}} </option>
                                        @endforeach
                                        @error('etiqueta_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                      </select>                                    
                                  </div>

                                  @isset($book)
                                    <div class="col-md-6">
                                        <label>Imagen Actual</label>                                        
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <img src=" {{Storage::url($book->route_image)}} " alt="" class="img-fluid" style="width:250px;height:250px">
                                        <br>
                                        <span>Nombre de la imagen: </span> {{$book->book_image}}
                                    </div>
                                  @else
                                     
                                  @endisset
                                  
                                  <div class="col-md-4">
                                    <label>Cargar Imagen</label>
                                  </div>
                                  
                                  <div class="col-md-4 form-group">
{{--                                     {{isset($book) ? Storage::url($book->route_image) : ''}} --}}
                                    <input type="file" accept="image/*" id="archivo" class="form-control" name="archivo" value="{{ isset($book) ? Storage::url($book->route_image) : '' }}{{ old('archivo') }}">                                                                                                                        
                                    @error('archivo')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                  </div>                                  
                                  
                                  <div class="col-sm-12 d-flex justify-content-end">
                                      @isset($book)
                                      @else
                                          <button type="reset" class="btn btn-light-secondary me-1 mb-1">Limpiar</button>
                                      @endisset
                                      <button type="submit" class="btn btn-primary me-1 mb-1" style="background-color: #007bff;">Guardar</button>
                                      
                                      {{-- <form action="/book/{{ $book->id }}" method="POST" class="form form-horizontal">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Eliminar" class="btn btn-danger">  
                                      </form> --}}
                                      
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

        {{-- Fin del test create --}} 

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
