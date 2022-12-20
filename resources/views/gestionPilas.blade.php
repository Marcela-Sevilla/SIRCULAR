@extends('layout.navbar')
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Gesti&oacute;n Pilas | Sircular</title>
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
    <div class="container-fluid gestion-pilas d-flex justify-content-center align-items-center" data-aos="fade-up">
    </div>
  </section>
  <!-- Gestion Pilas Main-->
<main id="main">
    <section class="funcionamientos pb-0 mb-5">
        <div class="container" data-aos="fade-up">

          <div class="section-pilas text-center px-3 mb-4">
            <h3>Mala gesti&oacute;n de pilas y bater&iacute;as impacta en la salud y en el medio ambiente</h3>

          </div>

          <ul class="nav nav-tabs row justify-content-center">

            <li class="nav-item col-auto mb-4 mb-lg-0">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                <h4>Efectos nocivos al medio ambiente</h4>
              </a>
            </li><!-- End Tab 1 Nav -->

            <li class="nav-item col-auto mb-4 mb-lg-0">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                <h4>Efectos nocivos a la salud</h4>
              </a>
            </li><!-- End Tab 2 Nav -->

          </ul>

          <div class="tab-content">

            <div class="tab-pane active show" id="tab-1">
              <div class="row justify-content-center mx-0">
                <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border border-2 border-opacity-75 px-5 py-5 bordeado">

                  <p class="mb-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolor aspernatur similique deleniti corporis, quod voluptatum. Sunt vitae molestias, et voluptas quasi natus soluta cumque libero rerum velit aperiam repellat!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, modi earum, ipsum, eveniet natus tempora et similique cumque aspernatur repellat blanditiis iure aliquam corporis laudantium eligendi tenetur consectetur! Atque, quisquam!Velit reprehenderit iste rem minus nemo exercitationem repellat facere voluptatibus molestiae, sapiente aliquam, quidem eius dicta delectus pariatur maiores ullam voluptatem magnam optio excepturi nulla. Nobis hic ducimus doloribus explicabo.
                  </p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum at molestias minus sit eveniet nostrum distinctio, blanditiis, cupiditate quisquam tempore deleniti, debitis asperiores neque corporis harum voluptates laboriosam odit nam?</p>

                </div>
              </div>
            </div><!-- End Tab Content 1 -->

            <div class="tab-pane" id="tab-2">
              <div class="row justify-content-center mx-0">
                <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border border-2 border-opacity-75 px-5 py-5 bordeado">

                    <p class="mb-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolor aspernatur similique deleniti corporis, quod voluptatum. Sunt vitae molestias, et voluptas quasi natus soluta cumque libero rerum velit aperiam repellat!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, modi earum, ipsum, eveniet natus tempora et similique cumque aspernatur repellat blanditiis iure aliquam corporis laudantium eligendi tenetur consectetur! Atque, quisquam!Velit reprehenderit iste rem minus nemo exercitationem repellat facere voluptatibus molestiae, sapiente aliquam, quidem eius dicta delectus pariatur maiores ullam voluptatem magnam optio excepturi nulla. Nobis hic ducimus doloribus explicabo.
                      </p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum at molestias minus sit eveniet nostrum distinctio, blanditiis, cupiditate quisquam tempore deleniti, debitis asperiores neque corporis harum voluptates laboriosam odit nam?</p>
                </div>
              </div>
            </div><!-- End Tab Content 2 -->

          </div>

        </div>
      </section><!-- End Funcionamientos Section -->
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
