<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" />

    <title>{{ $title }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('assets/vendors/tables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/tables/datatables.net-bs4/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <!-- Leaflet -->
    <link href="https://unpkg.com/leaflet/dist/leaflet.css" rel="stylesheet"/>
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet'/>

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    @stack('css')

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        @include('admin.sidebar')
        @include('admin.navbar')

        @yield('main')

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ECharts -->
    <script src="{{ asset('assets/vendors/echarts/dist/echarts.min.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('assets/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('assets/vendors/tables/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tables/datatables.net-bs4/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tables/datatable-basic.init.js') }}"></script>
    <!-- Skycons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/skycons/1396634940/skycons.min.js"></script>
    <!-- Leaflet -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @stack('scripts')
	
  </body>
</html>
