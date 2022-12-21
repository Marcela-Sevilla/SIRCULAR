@extends('layout.navbar')
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Econom&iacute;a Circular | Sircular</title>
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
  <!-- Revolucion Circular Section -->
  <section class="container-fluid revolucion-circular p-0">
    <div class="opacidad">
      <div class="d-flex flex-column justify-content-center h-100">
        <p>Una revoluci&oacute;n en marcha</p>
        <h1>Econom&iacute;a Circular</h1>
      </div>
    </div>
  </section><!-- End Revolucion Circular Section -->

  <main class="main">
    <!-- ======= On Focus Section ======= -->
    <section class="onfocus">
      <div class="container-fluid p-0" data-aos="fade-up">

        <div class="row g-0 justify-content-center">
          <div class="col-md-5 col-lg-4 video-play position-relative">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-md-6 col-lg-5">
            <div class="content d-flex flex-column justify-content-center h-100">
              <p class="p-3 p-md-0">
                La economía circular llamada tambien “economia
                de la cuna a la cuna” o “C2C” es una filosofía de
                organización de sistemas inspirada en los seres
                vivos, que persiguió el cambio de una economía
                lineal (producir, usar y tirar) cada vez más difícil de
                implementar por el agotamiento de los recursos
                haciaun modelo circular y regenerativo, tal y como
                ocurre en la naturaleza y que además supone una gran
                oportunidad en el ambiente, la cultura, los procesos de
                producción, los materiales, su uso y los aspectos
                posteriores a su vida útil en el ámbito empresarial e
                industrial.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End On Focus Section -->

    <!-- Procesos de Reciclaje Section -->
    <section class="procesos-reciclaje container-fluid p-0">
        <div class="row mb-5">
            <div class="col-lg-6 p-0">
                <img src="./assets/img/procesos-reciclaje.jpg" class="w-100 h-100" alt="Procesos Reciclaje">
            </div>
            <div class="bg-oliva col-lg-6 p-4 d-flex flex-column justify-content-center text-center">
                <h3 class="fw-bolder text-white h1 mb-4">Proceso del reciclaje de envases domésticos</h3>
                <p class="text-white fs-4 p-3">Estos son los procesos que siguen los envases domésticos ligeros desde que se ponen en el mercado hasta su reciclaje</p>
                <div class="text-center">
                    <a href="#" class="btn btn-lg btn-light albahaca shadow-sm">Conoce M&aacute;s Aqu&iacute;</a>
                </div>
            </div>
        </div>
    </section><!-- End Procesos de Reciclaje Section -->

    <section class="circular-9R d-flex flex-column align-items-center" data-aos="zoom-in-up">
        <div class="position-relative">
            <div class="circle-title d-flex flex-column justify-content-center text-center">
                <p class="p-0 m-0 display-1 fw-bolder">9R</p>
                <p class="p-0 m-0">Econom&iacute;a</p>
                <p class="p-0 m-0">Circular</p>
            </div>

            <div class="item-circle-9R">
                <img src="./assets/img/9R/remanofacturar.png">
            </div>
            <div class="item-circle-9R">
                <img src="./assets/img/9R/reutilizar.png">
            </div>
            <div class="item-circle-9R">
                <img src="./assets/img/9R/reciclar.png">
            </div>
            <div class="item-circle-9R">
                <img src="./assets/img/9R/recuperar.png">
            </div>

            <div class="item-circle-9R">
                <img src="./assets/img/9R/repensar.png">
            </div>

            <div class="item-circle-9R">
                <img src="./assets/img/9R/reciclar.png">
            </div>

            <div class="item-circle-9R">
                <img src="./assets/img/9R/remanofacturar.png">
            </div>

            <div class="item-circle-9R">
                <img src="./assets/img/9R/reparar.png">
            </div>

            <div class="item-circle-9R item-1">
                <img src="./assets/img/9R/restaurar.png">
            </div>

        </div>
    </section>
  </main>

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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
@endsection
