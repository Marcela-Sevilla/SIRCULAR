@extends('layout.navbar')
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Puntos Recolecci&oacute;n | Sircular</title>
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
<section class="mb-5">
  <div class="container-fluid fondo vh-50 d-flex justify-content-center align-items-center" data-aos="fade-up">
       <img src="./assets/img/Punto-Recoleccion.png" class="puntoRecoleccion" alt="Puntos de Recolección">
  </div>
</section>
<main id="main">


<section class="container-fluid p-0 mb-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.5529086776723!2d-74.77267138451624!3d10.997080358087455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef43287be2572f1%3A0xee9a6af6bc7c8b3c!2sMalec%C3%B3n%20Tur%C3%ADstico%20R%C3%ADo%20Magdalena%20Barranquilla!5e0!3m2!1ses!2sco!4v1671483385202!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

  <!-- End Puntos De Recolección Page -->
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
