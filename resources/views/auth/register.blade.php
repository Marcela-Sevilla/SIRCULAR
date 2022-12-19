@extends('layout.navbar')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registrate | Sircular</title>
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
 <!-- Register -->
 <div class="login container py-5 mt-1">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right border-0 shadow rounded-4" >

          <div class="card-body p-5 shadow-5 text-center">
            <div class="d-flex justify-content-center mb-4">
                <img src="assets/img/logo-sircular.png" alt="Logo Sircular" width="200px" height="80px">
            </div>
            <form class="form-login needs-validation" action="{{route('register')}}" method="POST" novalidate>
              @csrf

              <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" name="nombre" id="nombre" class="form-control shadow-sm" required/>
                            <div class="invalid-feedback mb-2">
                              Este Campo es Requerido.
                            </div>
                            <label class="form-label mt-1" for="nombre">Nombre</label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="email" name="correo" id="correo" class="form-control shadow-sm" required/>
                            <div class="invalid-feedback mb-2">
                              Este Campo es Requerido.
                            </div>
                            <label class="form-label mt-1" for="correo">Correo</label>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <select class="form-select shadow-sm" name="tipo_usuario" id="tipo_usuario" required>
                                <option selected disabled value="">Seleccione..</option>
                                <option value="empresa">NIT</option>
                                <option value="persona">CC</option>
                                <option value="persona">CE</option>
                                <option value="persona">TI</option>
                            </select>
                            <div class="invalid-feedback mb-2">
                              Este Campo es Requerido.
                            </div>
                            <label class="form-label mt-1" for="tipo_usuario">Tipo Documento</label>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="number" name="identificacion" id="identificacion" class="form-control shadow-sm" required/>
                            <div class="invalid-feedback mb-2">
                              Este Campo es Requerido.
                            </div>
                            <label class="form-label mt-1" for="identificacion">Numero Identificaci&oacute;n</label>
                        </div>
                    </div>

                    <div class="col-12 mb-2">
                        <div class="form-outline">
                            <input type="password" name="password" id="password" class="form-control shadow-sm" required/>
                            <div class="invalid-feedback mb-2">
                              Este Campo es Requerido.
                            </div>
                            <label class="form-label mt-1" for="password">Contrase&ntilde;a</label>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                      <a href="{{route('Login')}}">Ya tienes una cuenta?</a>
                    </div>

               </div>

              <button type="submit" class="btn btn-block">Registrate</button>
              
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 d-none d-lg-block">
        <img src="assets/img/login.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>

</section>
<!-- Section: Register -->

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