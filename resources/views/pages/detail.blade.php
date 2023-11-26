@extends('user.layout')
@section('main')

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

                @if($wisata->cover)
                <div class="swiper-slide">
                  <img src="{{url('assets/images/wisata')}}/{{ $wisata->cover }}" alt="">
                </div>
                @endif

                @if($wisata->foto1)
                <div class="swiper-slide">
                  <img src="{{url('assets/images/wisata')}}/{{ $wisata->foto1 }}" alt="">
                </div>
                @endif

                @if($wisata->foto2)
                <div class="swiper-slide">
                  <img src="{{url('assets/images/wisata')}}/{{ $wisata->foto2 }}" alt="">
                </div>
                @endif

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
                <li><strong>Alamat</strong>: {{ $wisata->alamat }}, Kecamatan {{ $wisata->kecamatan->nama_kecamatan }}, {{ $wisata->region->nama_region }}, Jawa Tengah</li>
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

<main><!-- End #main -->

@endsection

@push('scripts')
<script>
  var latitude = {{ $wisata->latitude }};
  var longitude = {{ $wisata->longitude }};
  var map = L.map('map').setView([latitude, longitude], 14);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap'
  }).addTo(map);
  var popupContent = @json(view('pages.popup', ['wisata' => $wisata])->render());
  L.marker([latitude, longitude])
      .addTo(map)
      .bindPopup(popupContent);
  
  map.addControl(new L.Control.Fullscreen());
</script>
@endpush