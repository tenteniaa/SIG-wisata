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
  <!-- Leaflet -->
  <link href="https://unpkg.com/leaflet/dist/leaflet.css" rel="stylesheet"/>

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/landingpage.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
      
        <div class="logo">
            <a href="/">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid">
                <span>TOEJOE</span>
            </a>
        </div>
      
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="/#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="/#about">About</a></li>
            <li><a class="nav-link scrollto" href="/#discover">Discover</a></li>
            <li><a class="nav-link scrollto" href="/#gallery">Gallery</a></li>
            <li><a class="nav-link scrollto" href="/#team">Team</a></li>
            <a class="btn-login scrollto" href="{{ route('dashboard.dashboard') }}">Login</a>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- navbar -->
      
      </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Wisata — <span>{{ $wisata->nama }}</span></h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/#discover">Daftar Wisata</a></li>
            <li>Detail</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('assets/images/portfolio/portfolio-1.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('assets/images/portfolio/portfolio-2.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('assets/images/portfolio/portfolio-3.jpg') }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <h2>Lokasi</h2>
            <div id="map" class="maps__container">
                {{-- OpenStreetMaps --}}
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{ $wisata->nama }}</h3>
              <ul>
                <li><strong>Alamat</strong>: {{ $wisata->alamat }}</li>
                <li><strong>Harga </strong>(mulai dari) : Rp {{ number_format($wisata->harga, 0, ',', '.') }}</li>
                <li><strong>Kontak</strong>: 
                    @if($wisata->contact)
                        {{ $wisata->contact }}
                    @else
                        —
                    @endif
                </li>
                <li><strong>Sosial Media</strong>: 
                    @if($wisata->sosmed)
                    <a href="{{ $wisata->sosmed }}" target="_blank" class="btn btn-sosmed btn-primary"><i class="fa fa-globe"></i> Kunjungi</a>
                    @else
                        —
                    @endif
                </li>
              </ul>
            </div>
            <div class="portfolio-info">
              <h2>Deskripsi</h2>
              <p>
                {{ $wisata->deskripsi }}
              </p>
            </div>
            <div class="portfolio-info">
              <h2>Fasilitas</h2>
              <p>
                @if($wisata->fasilitas)
                    <ul>
                        @php
                            $fasilitasArray = explode(', ', $wisata->fasilitas);
                        @endphp

                        @foreach($fasilitasArray as $fasilitas)
                            <li>&#8226; {{ $fasilitas }}</li>
                        @endforeach
                    </ul>
                @else
                    —
                @endif
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Details Section -->

  </main><!-- End #main -->

  @include('user.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendors/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Leaflet -->
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/landingpage.js') }}"></script>

  <script>
    var latitude = {{ $wisata->latitude }};
    var longitude = {{ $wisata->longitude }};

    var map = L.map('map').setView([latitude, longitude], 14);
  
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    var popupContent = @json(view('pages.popup-detail', ['wisata' => $wisata])->render());
    L.marker([latitude, longitude])
        .addTo(map)
        .bindPopup(popupContent);
        // console.log(@json($wisata))
  </script>

</body>

</html>