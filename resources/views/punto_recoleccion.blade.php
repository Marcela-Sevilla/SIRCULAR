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

    <section class="puntosMapa container-fluid">
        <div class="row mx-md-3 mx-lg-5">

            <div class="col-lg-6 h-100 mb-5 mb-lg-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15665.437010220685!2d-74.79378656005808!3d11.011649424594054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbarranquilla%20malecon!5e0!3m2!1ses!2sco!4v1671648798766!5m2!1ses!2sco"
                style="border:0; width:100%;" height="500px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-6 pt-5 pt-lg-0">
                <form class="php-email-form needs-validation"  novalidate>
                    @csrf

                    <div class="position-relative d-flex justify-content-center">
                      <div class="text-center logo"><img src="assets/img/isotipo-sircular.png" width="80px" height="80px" alt="Logo Sircular"></div>
                    </div>

                    <div class="row">

                      <div class="form-group mt-3">
                        <label for="direccion">Direcci&oacute;n:</label>
                        <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Ingresa la direcci&oacute;n" required>
                        <div class="invalid-feedback ms-2">
                          Este Campo es Requerido.
                        </div>
                      </div>

                    <div class="form-group mt-3">
                      <label for="descripcion">Descripci&oacute;n de Residuos:</label>
                      <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Escribe una breve descripci&oacute;n de los materiales reciclables." required></textarea>
                      <div class="invalid-feedback ms-2">
                        Este Campo es Requerido.
                      </div>
                    </div>

                    <div class="text-center mt-4"><button type="submit">Agregar<i class="bi bi-send ms-1"></i></button></div>
                  </form>
            </div>
        </div>
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
