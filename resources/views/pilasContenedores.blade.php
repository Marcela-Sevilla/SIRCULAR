@extends('layout.navbar')
<!DOCTYPE html>
<html lang="en">

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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

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
    <!-- ======= Header ======= -->
    @section('navbar')
        <!-- End Header -->
  <!-- ======= Section contenedores ======= -->
  <section class="mb-5">
    <div class="container-fluid pilas-contenedores d-flex justify-content-center align-items-center" data-aos="fade-up">
    </div>
  </section>
  <main id="main">
      <section class="container mt-5">
        <div class="row m-0">
            <div class="col-lg-7 justify-content-center align-content-center py-3">
                     <p class="justify p-md-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem repellat at quo quos voluptas dolor laboriosam, totam deserunt nulla laudantium, ipsa sed vel perspiciatis ad iusto qui praesentium fugiat quis?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum aut earum, itaque iusto, maiores sapiente possimus repudiandae necessitatibus qui eum harum sit. Ipsum similique vel aliquid nisi quisquam atque soluta.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto illo quasi ipsa quae modi maiores rem, optio quaerat quisquam minus temporibus ex est vel? Officia assumenda obcaecati culpa est esse!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quaerat accusantium rem provident voluptate dignissimos, aliquam nisi velit et explicabo, quisquam exercitationem qui necessitatibus laboriosam natus eius amet nihil. Illo!
                    </p>
            </div>
            <div class="col-lg-4 img-economia d-flex flex-column justify-content-center align-items-center">
                <h3>Econom&iacute;a Circular</h3>
                  <img src="./assets/img/mundo-reci 2.png" alt="Economia circular">
            </div>
        </div>
        <div class="row m-0">



            <div class="col-lg-4 img-economia d-flex flex-column justify-content-center align-items-center">
                <h3 class="m-0">Econom&iacute;a L&iacute;neal</h3>
                <img src="./assets/img/mundo-lineal 2.png" alt="Economia circular">
          </div>
            <div class="col-lg-7 justify-content-center align-content-center py-3">
                     <p class="justify p-md-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem repellat at quo quos voluptas dolor laboriosam, totam deserunt nulla laudantium, ipsa sed vel perspiciatis ad iusto qui praesentium fugiat quis?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum aut earum, itaque iusto, maiores sapiente possimus repudiandae necessitatibus qui eum harum sit. Ipsum similique vel aliquid nisi quisquam atque soluta.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto illo quasi ipsa quae modi maiores rem, optio quaerat quisquam minus temporibus ex est vel? Officia assumenda obcaecati culpa est esse!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quaerat accusantium rem provident voluptate dignissimos, aliquam nisi velit et explicabo, quisquam exercitationem qui necessitatibus laboriosam natus eius amet nihil. Illo!
                    </p>
            </div>

        </div>

      </section>
  </main>
  <!-- ======= End Section Contendores ======= -->
      <!-- ======= Beneficos Economía Circular Section ======= -->
      <section class="contact">
        <div class="container-fluid mb-5">
          <h2 class="text-center text-white fw-bold m-0">¿Qu&eacute; beneficios tiene la econom&iacute;a circular?</h2>
        </div>
      </section>
     <!-- ======= End Beneficos Economía Circular Section ======= -->

     <!-- ======= cards Economía Circular Section ======= -->
     <section id="featured-services" class="card-home mb-5">
        <div class="container w-tamaño">
          <div class="row gy-3 justify-content-md-center">

            <div class="col-md-9 col-lg-6 d-flex mb-4 mb-lg-0" data-aos="zoom-out" data-aos-delay="400">
                <div class="item-card position-relative shadow">
                  <div class="icon">
                    <img src="./assets/img/cards-carrousel/respetuoso-del-medio-ambiente (1).png" alt="">
                  </div>
                  <div class="texto-cartas">
                  <h4>Protege el medio ambiente</h4>
                  <p class="justify">Aqu&iacute; podras encontrar una geolocalización de los puntos
                    de recolección de residuos más cercanos a tu ubicaci&oacute;n.</p>
                </div>
                </div>
              </div><!-- End Item Card -->

              <div class="col-md-9 col-lg-6 d-flex mb-5 mb-lg-0" data-aos="zoom-out" data-aos-delay="400">
                  <div class="item-card position-relative shadow">
                    <div class="icon">
                      <img src="./assets/img/cards-carrousel/mercado (1).png" alt="">
                    </div>
                    <div class="texto-cartas">
                    <h4>Benefico a la econom&iacute;a local</h4>
                    <p class="justify">Aqu&iacute; podras encontrar una geolocalización de los puntos
                      de recolección de residuos más cercanos a tu ubicaci&oacute;n.</p>
                    </div>
                  </div>
                </div><!-- End Item Card -->


            <div class="col-md-9 col-lg-6 d-flex mb-5 mb-lg-0" data-aos="zoom-out" data-aos-delay="400">
              <div class="item-card position-relative shadow ">
                <div class="icon">
                  <img src="./assets/img/cards-carrousel/plan-de-negocios (1).png" alt="">
                </div>
                <div class="texto-cartas">
                <h4>Ayuda a fomentar el empleo</h4>
                <p class="justify">Aqu&iacute; podras encontrar una geolocalización de los puntos
                  de recolección de residuos más cercanos a tu ubicaci&oacute;n.</p>
                </div>
              </div>
            </div><!-- End Item Card -->

            <div class="col-md-9 col-lg-6 d-flex mb-5 mb-lg-0" data-aos="zoom-out" data-aos-delay="400">
                <div class="item-card position-relative shadow ">
                  <div class="icon">
                    <img src="./assets/img/cards-carrousel/economia-circular (1).png" alt="">
                  </div>
                  <div class="texto-cartas">
                  <h4>Independencia de recursos</h4>
                  <p class="justify">Aqu&iacute; podras encontrar una geolocalización de los puntos
                    de recolección de residuos más cercanos a tu ubicaci&oacute;n.</p>
                </div>
            </div>
              </div><!-- End Item Card -->

          </div>

        </div>
      </section>

     <!-- ======= End cards Economía Circular Section ======= -->
        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="footer-content">
                <div class="container-fluid">

                    <div class="row justify-content-center footer-links">
                        <div class="col-md-4 col-lg-3 text-center mb-3">
                            <a href="/#PrincipiosEconom&Aacute;aCircular">Econom&iacute;a Circular</a>
                        </div>
                        <div class="col-md-3 text-center mb-3">
                            <a href="{{ route('Register') }}" class="btn-registrate shadow-sm">Registrate!</a>
                        </div>
                        <div class="col-md-4 col-lg-3 text-center mb-3">
                            <a href="/#contact">Contactanos</a>
                        </div>
                    </div>

                    <div class="divider-footer position-relative d-flex justify-content-center">
                        <div class="social-links order-first order-lg-last">
                            <a href="https://twitter.com/" target="_blank" class="twitter mx-2"><i
                                    class="bi bi-twitter"></i></a>
                            <a href="https://es-la.facebook.com/" target="_blank" class="facebook mx-2"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/" target="_blank" class="instagram mx-2"><i
                                    class="bi bi-instagram"></i></a>
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

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>
        <!-- End Footer -->

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
