<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/images/logo.png') }}" rel="icon"/>
  <link href="{{ asset('assets/images/logo.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendors/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

  <!-- Datatables -->
  <link href="{{ asset('assets/vendors/tables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/tables/datatables.net-bs4/css/responsive.dataTables.min.css') }}" rel="stylesheet">
  
  <!-- Leaflet -->
  <link href="https://unpkg.com/leaflet/dist/leaflet.css" rel="stylesheet"/>
  <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet'/>

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/landingpage.css') }}" rel="stylesheet">
</head>

<body>

  @include('user.navbar')

  @yield('main')

  @include('user.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- jQuery -->
  <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendors/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>
  <!-- Datatables -->
  <script src="{{ asset('assets/vendors/tables/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/tables/datatables.net-bs4/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/tables/datatable-basic.init.js') }}"></script>
  <!-- Leaflet -->
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/landingpage.js') }}"></script>

  @stack('scripts')

</body>

</html>