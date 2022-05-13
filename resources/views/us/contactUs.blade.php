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
                  <a class="nav-link active" href="{{ url('/contactus') }}"
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
                  <a class="nav-link active" href="{{ url('/contactus') }}"
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
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>¿Algún problema?</h4>
              <h2>Contáctanos</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


 {{--    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
            <div id="map">
              <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>About our office</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Envíanos un correo</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Nombre completo" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="Dirección de correo electrónico" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Asunto" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mensaje" required=""></textarea>
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
          <div class="col-md-4">            
            <ul class="accordion">
              <li>
                  <h4><strong> Preguntas frecuentes</strong></h4> <br>
                  <p>Sección dedicada a solventar las dudas más comúnes</p>
              </li>
              <li>
                  <a>¿Tiempo de respuesta?</a>
                  <div class="content">
                      <p>El tiempo de respuesta al correo se realiza lo más pronto posible.</p>
                  </div>
              </li>
              <li>
                  <a>¿Las entregas pueden ser fuera de Cucei?</a>
                  <div class="content">
                      <p>Se recomienda que los tratos sólo se hagan dentro del centro universitario para evitar cualquier problema.</p>
                  </div>
              </li>
              <li>
                  <a>¿Qué pasa si surge un problema con un usuario?</a>
                  <div class="content">
                      <p>Se pone en contacto con nosotros y de acuerdo a la gravedad del problema se tomarán las acciones conrrespondientes.</p>
                  </div>
              </li>
              <li>
                  <a>¿Cualquier persona puede publicar sus libros?</a>
                  <div class="content">
                      <p>Sólo usuarios registrados y estudiantes activos de Cucei.</p>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Happy Customers</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel">
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="1">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="2">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="3">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="4">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="5">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="6">
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
