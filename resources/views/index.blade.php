@extends('layout.navbar')
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sircular</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/isotipo-sircular.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- ICONS fontawesome  -->
  <link href="assets/font-awesome/css/all.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>
  @section('navbar')
  <!-- ======= Home Slider Section ======= -->
  <section id="sliderHome" class="sliderHome">
    <div class="container-fluid p-0">

      <div class="container-slider swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <img src="./assets/img/carousel/carousel.jpeg" class="img-item" alt="">
          </div>

          <div class="swiper-slide">
            <img src="./assets/img/carousel/carousel1.jpg" class="img-item" alt="">
          </div>

          <div class="swiper-slide">
              <img src="./assets/img/carousel/carousel2.jpg" class="img-item" alt="">
          </div>

          <div class="swiper-slide">
            <img src="./assets/img/carousel/carousel3.jpg" class="img-item" alt="">
          </div>

          <div class="swiper-slide">
            <img src="./assets/img/carousel/carousel4.jpg" class="img-item" alt="">
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Home Slider Section -->

  <main id="main">

    <!-- ======= Card Home Section ======= -->
    <section id="featured-services" class="card-home">
      <div class="container">

        <article class="video-sircular text-center mb-4">
          <a href="https://www.youtube.com/watch?v=u4nGupcnTaY" target="_blank">
              <i class="bi bi-play-circle me-2"></i>Ver Video
          </a>
        </article>

        <div class="row gy-3 justify-content-md-center">

          <div class="col-md-9 col-lg-4 d-flex mb-4 mb-lg-0" data-aos="zoom-out">
            <div class="item-card position-relative shadow">
              <div class="icon">
                <img src="./assets/img/card-home/anunciar.svg" alt="">
              </div>
              <h4>Anunciar</h4>
              <p>Puedes ofertar y demandar residuos de poliestireno, entre otros tipos de reciduos.</p>
            </div>
          </div><!-- End Item Card -->

          <div class="col-md-9 col-lg-4 d-flex mb-4 mb-lg-0" data-aos="zoom-out" data-aos-delay="200">
            <div class="item-card position-relative shadow">
              <div class="icon">
                <img src="./assets/img/card-home/culturaReciclaje.svg" alt="">
              </div>
              <h4>Cultura de Reciclaje</h4>
              <p>Buscamos fomentar el cuidado del medio ambiente y la econom&iacute;a
                circular en el caribe y toda Colombia.</p>
            </div>
          </div><!-- End Item Card -->

          <div class="col-md-9 col-lg-4 d-flex mb-4 mb-lg-0" data-aos="zoom-out" data-aos-delay="400">
            <div class="item-card position-relative shadow">
              <div class="icon">
                <img src="./assets/img/card-home/geolocalizacion.svg" alt="">
              </div>
              <h4>Geolocalizaci&oacute;n</h4>
              <p>Aqu&iacute; podras encontrar una geolocalización de los puntos
                de recolección de residuos más cercanos a tu ubicaci&oacute;n.</p>
            </div>
          </div><!-- End Item Card -->

        </div>

      </div>
    </section><!-- End Card Home Section -->

    <a name="PrincipiosEconom&Aacute;aCircular"></a>
    <!-- ======= Principos Economia ======= -->
    <div id="principiosEconomia" class="position-relative">

      <div class="principios-Economia">
          <div class="opacidad h-100 w-100 py-5 d-md-flex flex-column justify-content-center d-lg-block">
              <article class="article-economia-circular px-4 px-md-5 px-lg-0" data-aos="zoom-in-up">
                  <h2 class="h1 fw-semibold mb-4">Principios de la Econom&iacute;a Circular</h2>
                  <p class="">La econom&iacute;a circular se basa en 4 principios fundamentales que deben ser aplicados en toda nuestra econom&iacute;a, sin importar el tipo de empresa o sector econ&oacute;mico: Dise&ntilde;ar sin residuos ni contaminaci&oacute;n. Mantener los materiales en uso durante el mayor tiempo.</p>
              </article>
        </div>
      </div>

      <!-- ======= card economia Section ======= -->
      <div id="cardEconomia" class="card-economia">
        <div class="row justify-content-md-center justify-content-lg-evenly pt-5 pt-lg-0 mx-5 mx-lg-0">

          <div class="post-box col-md-9 col-lg-3 shadow mb-5 mb-lg-0">
            <div class="post-body p-4">
              <h3 class="post-title">Econom&iacute;a C&iacute;rcular</h3>
              <p>Econom&iacute;a Circular o "econom&iacute;a de la cuna a la cuna" (C2C), es una filosof&iacute;a de organizaci&oacute;n de sistemas
                inspirada en los seres vivos, que persigui&oacute; el cambio de una econom&iacute;a lineal (producir, usar y tirar ) cada vez es m&aacute;s dificil de implementar.
              </p>
            </div>
          </div>

          <div class="post-box col-md-9 col-lg-3 shadow mb-5 mb-lg-0">
            <div class="post-body p-4">
              <h3 class="post-title">Producci&oacute;n Limpia</h3>
              <p>La producci&oacute;n limpia se puede definir como una aplicaci&oacute;n continua de estrategia ambiental preventiva integrada a procesos,
                productos y servicios para aumentar la eficiencia global y reducir los riesgos para los seres humanos y el medio ambiente.
              </p>
            </div>
          </div>

          <div class="post-box col-md-9 col-lg-3 shadow mb-lg-0">
            <div class="post-body p-4">
              <h3 class="post-title">Sircular</h3>
              <p>Somos un sistema de informaci&oacute;n que fomenta el Reciclaje, Cooperaci&oacute;n, Ubicaci&oacute;n y Libre aprovechamiento de
                los residuos; buscamos aportar al desarrollo y concientizaci&oacute;n de los modelos de econom&iacute;a sustentable para el caribe y toda Colombia.
              </p>
            </div>
          </div>

        </div>
      </div>
      <!-- ======= card economia Section ======= -->
    </div>
    <!-- ======= End principos de la economia ======= -->

    <a name="Funcionamientos"></a>
    <!-- ======= Funcionamientos Section ======= -->
    <section class="funcionamientos pb-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header px-3">
          <h2>Funcionamientos Econom&iacute;a Circular</h2>
          <p>La economía circular descansa en varios principios</p>
        </div>

        <ul class="nav nav-tabs row justify-content-center">

          <li class="nav-item col-auto mb-4 mb-lg-0">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Eco-concepci&oacute;n</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-auto mb-4 mb-lg-0">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Econom&iacute;a Funcional</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-auto mb-4 mb-lg-0">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Reutilizaci&oacute;n</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-auto mb-4 mb-lg-0">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Funciones</h4>
            </a>
          </li><!-- End Tab 4 Nav -->

          <li class="nav-item col-auto mb-4 mb-lg-0">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
              <h4>Ecolog&iacute;a</h4>
            </a>
          </li><!-- End Tab 5 Nav -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row px-5 justify-content-center">
              <div class="col-lg-6 col-xl-5 col-xxl-6 cencepto">
                <h3>La Eco-concepci&oacute;n:</h3>
                <p>
                  La Eco-concepci&oacute;n consiste en considerar los impactos medioambientales a lo largo del ciclo de vida de un producto e integrarlos desde su concepci&oacute;n.
                </p>
              </div>
              <div class="col-lg-5 col-xl-4 text-center">
                <img src="assets/img/funcionamientoEC/img-content-3.svg" class="img-funcionamiento">
              </div>
            </div>
          </div><!-- End Tab Content 1 -->

          <div class="tab-pane" id="tab-2">
            <div class="row px-5 justify-content-center">
              <div class="col-lg-6 col-xl-5 col-xxl-6 cencepto">
                <h3>La Econom&iacute;a Funcional:</h3>
                <p>Esta econom&iacute;a se basa en privilegiar el uso frente a la posesi&oacute;n y la venta de un servicio frente aun bien.
                </p>
              </div>
              <div class="col-lg-5 col-xl-4 text-center">
                <img src="assets/img/funcionamientoEC/img-content-4.svg" class="img-funcionamiento">
              </div>
            </div>
          </div><!-- End Tab Content 2 -->

          <div class="tab-pane" id="tab-3">
            <div class="row px-5 justify-content-center">
              <div class="col-lg-6 col-xl-5 col-xxl-6 cencepto">
                <h3>La Reutilizaci&oacute;n:</h3>
                <p>
                  Podemos reutilizar y aprovechar ciertos residuos o partes de los mismos, que todav&iacute;a pueden funcionar para la elaboraci&oacute;n de nuevos productos.
                </p>
              </div>
              <div class="col-lg-5 col-xl-4 text-center">
                <img src="assets/img/funcionamientoEC/img-content-2.svg" class="img-funcionamiento">
              </div>
            </div>
          </div><!-- End Tab Content 3 -->

          <div class="tab-pane" id="tab-4">
            <div class="row px-5 justify-content-center">
              <div class="col-lg-6 col-xl-5 col-xxl-6 cencepto">
                <h3>El Segundo Uso:</h3>
                <p>
                  Consiste en reintroducir en el circuito econ&oacute;mico aquellos productos que ya no corresponden a las necesidades iniciales de los consumidores.
                </p>
              </div>
              <div class="col-lg-5 col-xl-4 text-center">
                <img src="assets/img/funcionamientoEC/img-content-1.svg" class="img-funcionamiento">
              </div>
            </div>
          </div><!-- End Tab Content 4 -->

          <div class="tab-pane" id="tab-5">
            <div class="row px-5 justify-content-center">
              <div class="col-lg-6 col-xl-5 col-xxl-6 cencepto">
                <h3>La Ecolog&iacute;a Industrial y Territorial:</h3>
                <p>
                  Consiste en establer un modo de organizaci&oacute;n industrial en un mismo territorio caracterizado 
                  por una gesti&oacute;n optimizada de los stocks y de los flujos de materiales, energ&iacute;a y servicios.
                </p>
              </div>
              <div class="col-lg-5 col-xl-4 text-center">
                <img src="assets/img/funcionamientoEC/img-content-5.svg" class="img-funcionamiento">
              </div>
            </div>
          </div><!-- End Tab Content 5 -->

        </div>

      </div>
    </section><!-- End Funcionamientos Section -->

    <a name="SectorAgua"></a>
    <!-- ======= Sector Agua Section ======= -->
    <section class="sector-agua mt-4">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-lg-between">

          <div class="col-lg-7 content">
            <h3 class="mb-4">Econom&iacute;a Circular en el Sector del Agua</h3>
            <p>Actualmente los debates sobre la escasez de agua, el calentamiento global y los efectos a largo plazo de los procesos
              industriales en el medio ambientehan han impulsado el desarrollo de conceptos de econom&iacute;a circular, comenzando con
              el reciclaje de desechos industriales y municipales. La econom&iacute;a circular y la ecoeficiencia se
              basan en el supuesto de que todos los recursos deben gestionarse de forma sostenible.
            </p>
          </div>

          <div class="col-lg-4 d-none d-lg-flex flex-lg-column justify-content-lg-center">
            <div class="img">
              <img src="assets/img/sectorAguaH.jpg" alt="Sector Agua" class="img-fluid">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Sector Agua Section -->

    <a name="TemasInteres"></a>
    <div class="divider position-relative d-flex justify-content-center">
      <div class="section-header p-0">
        <h2 class="px-2 m-0">Tambi&eacute;n Podr&iacute;a Interesarte</h2>
      </div>
    </div>

    <!-- ======= Temas de Interes Section ======= -->
    <section class="contentInterest">
      <div class="container" data-aos="fade-up">

        <div class="row gy-3 justify-content-center">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="interst-item">
              <div class="img">
                <img src="assets/img/temasInteres/reciclar.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="fa-solid fa-recycle"></i>
                </div>
                <a href="#" class="">
                  <h3>¿Por qu&eacute; seguimos tirando las
                    pilas al contenedor orgánico?</h3>
                </a>
                <p>El uso de pilas en nuestro d&iacute;a a d&iacute;a es inevitable, pero su vida no es infinita y por eso tenemos que saber...</p>
                <div class="text-center mt-3">
                  <a href="#" class="buy-btn shadow-sm">Leer M&aacute;s <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Interst Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="interst-item">
              <div class="img">
                <img src="assets/img/temasInteres/pila.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="fa-solid fa-tree"></i>
                </div>
                <a href="#" class="">
                  <h3>Los Efectos Contaminantes de Las Pilas</h3>
                </a>
                <p>Para imaginar la magnitud de la contaminaci&oacute;n de estas pilas, basta con saber que son las causantes del...</p>
                <div class="text-center mt-3">
                  <a href="#" class="buy-btn shadow-sm">Leer M&aacute;s <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Interst Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="interst-item">
              <div class="img">
                <img src="assets/img/temasInteres/naturaleza.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="fa-solid fa-leaf"></i>
                </div>
                <a href="#" class="">
                  <h3>Los Efectos de Las Pilas Mal Recicladas en la Salud</h3>
                </a>
                <p>Esta demostrado por profesionales de la Dirección General de Salud Ambiental (DIGESA), los cuales explican que...</p>
                <div class="text-center mt-3">
                  <a href="#" class="buy-btn shadow-sm">Leer M&aacute;s <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Interst Item -->

        </div>

      </div>
    </section><!-- End Temas de Interes Section -->

    <a name="contact"></a>
    <!-- ======= Contact Section ======= -->
    <section class="contact">
      <div class="container-fluid mb-5">
        <h2 class="text-center text-white fw-bold m-0">¡Cu&eacute;ntanos tus inquietudes!</h2>
      </div>
      <div class="container py-2 py-lg-4">

        <div class="row gy-5 gx-lg-5 justify-content-center">

          <div class="col-lg-4 mb-4 mb-lg-0">

            <div class="info">
              
              <img src="assets/img/logo-sircular.png" alt="Logotipo Sircular" class="img-fluid mb-3">

              <div class="info-item d-flex">
                <i class="fa-solid fa-map-location"></i>
                <div>
                  <h4>Estamos Ubicados:</h4>
                  <p>Barranquilla - Colombia</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="fa-solid fa-at"></i>
                <div>
                  <h4>Correo Electronico:</h4>
                  <p>Sircular@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="fa-solid fa-phone-volume"></i>
                <div>
                  <h4>Tel / Cel:</h4>
                  <p>300 0000 000 <br>
                    605 300 0000
                  </p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-7">
            <form class="php-email-form needs-validation" action="{{ route('Contactanos') }}" method="POST" novalidate>
              @csrf

              <div class="position-relative d-flex justify-content-center">
                <div class="text-center logo"><img src="assets/img/isotipo-sircular.png" width="80px" height="80px" alt="Logo Sircular"></div>
              </div>

              <div class="row">

                <div class="form-group mt-3">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingresa tu nombre" required>
                  <div class="invalid-feedback ms-2">
                    Por favor ingrese su nombre completo.
                  </div>
                </div>

                <div class=" form-group mt-3">
                  <label for="correo">Correo Electr&oacute;nico</label>
                  <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingresa tu correo" required>
                  <div class="invalid-feedback ms-2">
                    Su dirección de correo electronico es requerida.
                  </div>
                </div>
              </div>

              <div class="form-group mt-3">
                <label for="mensaje">Mensaje</label>
                <textarea class="form-control" name="mensaje" placeholder="Escribenos un mensaje" required></textarea>
                <div class="invalid-feedback ms-2">
                    Por favor ingrese su mensaje, asunto o inquietud.
                </div>
              </div>
              
              <div class="text-center mt-4"><button type="submit">Enviar <i class="bi bi-send"></i></button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container-fluid">

        <div class="row justify-content-center footer-links">
          <div class="col-md-4 col-lg-3 text-center mb-3">
            <a href="/#PrincipiosEconom&Aacute;aCircular">Econom&iacute;a Circular</a>
          </div>
          <div class="col-md-3 text-center mb-3">
            <a href="{{route('Register')}}" class="btn-registrate shadow-sm">Registrate!</a>
          </div>
          <div class="col-md-4 col-lg-3 text-center mb-3">
            <a href="/#contact">Contactanos</a>
          </div>
        </div>

        <div class="divider-footer position-relative d-flex justify-content-center">
            <div class="social-links order-first order-lg-last">
              <a href="https://twitter.com/" target="_blank" class="twitter mx-2"><i class="bi bi-twitter"></i></a>
              <a href="https://es-la.facebook.com/" target="_blank" class="facebook mx-2"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/" target="_blank" class="instagram mx-2"><i class="bi bi-instagram"></i></a>
            </div>
        </div>

      </div>
    </div>

    <div class="footer-legal text-center mt-lg-3">
      <div class="container">

        <div class="row justify-content-center">
          <div class="copyright">
            &copy; Copyright 2022, <strong><span>Sircular</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by Tecnolog&Aacute;as Virtuales - TecnoParque Nodo Atl&aacute;ntico
          </div>
        </div> 

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

@endsection