@extends('user.layout')
@section('main')
@include('user.hero')
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                        data-aos="fade-right"></div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <h3>ToeJoe</h3>
                        <p>ToeJoe adalah inovasi terkini dalam memanfaatkan teknologi Sistem Informasi Geografis
                            untuk memperkaya pengalaman wisata Anda. Dengan fokus pada destinasi pariwisata,
                            ToeJoe menyajikan pendekatan yang holistik, menggabungkan kekayaan data geografis
                            dengan informasi detail tentang tempat-tempat menarik.</p>
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-buildings"></i></div>
                            <h4 class="title"><a href="#">Memperkaya Pengalaman Pariwisata</a></h4>
                            <p class="description">ToeJoe tidak hanya memberikan informasi lokasi, tetapi juga memperkaya
                                pengalaman wisata dengan menyuguhkan informasi yang detail.</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-phone"></i></div>
                            <h4 class="title"><a href="#">Kemudahan Akses Informasi</a></h4>
                            <p class="description">Antarmuka yang intuitif memastikan akses mudah ke berbagai informasi
                                wisata.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span>Jumlah</span>
                            {{-- <p>Lorem</p> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $jumlah_wisata }}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            {{-- <p>Jumlah Wisata</p> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span>Wisata</span>
                            {{-- <p>Hours Of Support</p> --}}
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Details Section ======= -->
        <section id="discover" class="details">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Discover</h2>
                    <p>Find Your Destination</p>
                </div>

                <div class="row content">
                    <h3 data-aos="fade-up">Sebaran <span>Tempat Wisata</span> di Kota Semarang dan Kabupaten Semarang</h3>
                    <div class="col-md-3 mt-5 order-1 order-md-2 filter-by pt-2" data-aos="fade-left">
                        <div class="layers">
                          <h2><i class="fa fa-filter"></i> Filters by</h2>
                          <div class="clearfix"></div>
                        </div>
        
                        <div class="col-md-12 col-sm-12 mt-4 legend">
                          <h4 class="filter-title">Region</h4>
                          <ul class="legend-list">
                            <li>
                                <div class="color-name"><span class="color-code stairs"></span>
                                  <p class="legend-name">Kabupaten Semarang</p>
                                </div>
                                <div class="filter-check"><input type="checkbox" id="checkbox_region_1"></div>
                            </li>
                            <li>
                                <div class="color-name"><span class="color-code generic-models"></span>
                                  <p class="legend-name">Kota Semarang</p>
                                </div>
                                <div class="filter-check"><input type="checkbox" id="checkbox_region_2"></div>
                            </li>
                          </ul>
                        </div>
        
                        <div class="col-md-12 col-sm-12 mt-4 legend">
                          <h4 class="filter-title">Kategori</h4>
                          <ul class="legend-list">
                            <li>
                                <div class="color-name">
                                    <span class="color-code air-terminals"></span>
                                    <p class="legend-name">Alam</p>
                                </div>
                                <div class="filter-check"><input type="checkbox" id="checkbox_jenis_1"></div>
                            </li>
                            <li>
                                <div class="color-name">
                                    <span class="color-code plumbing-fixtures"></span>
                                    <p class="legend-name">Sejarah/Budaya</p>
                                </div>
                                <div class="filter-check"><input type="checkbox" id="checkbox_jenis_2"></div>
                            </li>
                            <li>
                                <div class="color-name">
                                    <span class="color-code roofs"></span>
                                    <p class="legend-name">Hiburan</p>
                                </div>
                                <div class="filter-check"><input type="checkbox" id="checkbox_jenis_3"></div>
                            </li>
                          </ul>
                        </div>
                    </div>
                    <div class="col-md-9 mt-5 order-2 order-md-1" data-aos="fade-up">
                        <div id="map" class="maps__container">
                            {{-- OpenStreetMaps --}}
                        </div>
                    </div>
                </div>

                <div class="row content">
                  <div class="col-md-12 col-sm-12">
                      <div class="x_panel" data-aos="fade-up">
                          <div class="x_title">
                            <h2>Daftar Tempat Wisata</h2>
                            <div class="nav navbar-right panel_toolbox">
                              <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                              <div class="table-responsive">
                                  <table id="zero_config" class="table table-striped text-nowrap">
                                      <thead>
                                          <tr>
                                              <th>Nama</th>
                                              <th class="popover-icon">Jenis</th>
                                              <th class="popover-icon">Harga</th>
                                              <th class="popover-icon">Alamat</th>
                                              <th class="text-center">Aksi</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($wisata as $item)
                                          <tr>
                                              <td class="table-name">{{ $item->nama }}</td>
                                              <td class="table-col popover-icon">
                                                @foreach($item->jenis_wisata as $me)
                                                {{ $me->jenis->nama_jenis }}@if (!$loop->last), @endif
                                                @endforeach
                                              </td>
                                              <td class="table-act popover-icon">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                              <td class="table-name popover-icon">{{ $item->alamat }}</td>
                                              <td class="table-act text-center">
                                                <a href="{{route('wisata.detail', $item->id)}}" class="btn btn-rounded btn-primary">Lihat <i class="fa fa-chevron-right"></i></a>
                                              </td>
                                          </tr>
                                      @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </section><!-- End Details Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Gallery</h2>
                    <p>Check Destination Galleries</p>
                </div>

                <div class="gallery-photo-slider swiper row g-0" data-aos="fade-left">
                    <div class="swiper-wrapper">

                        @foreach($wisata as $item)
                        <div class="swiper-slide">
                            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                                <img src="{{url('assets/images/wisata')}}/{{ $item->cover }}" alt="" class="img-cover">
                                <div class="gallery-links d-flex flex-column align-items-center justify-content-center">
                                    <h3 class="nama-wisata">{{ $item->nama }}</h3>
                                    <div>
                                        <a href="{{url('assets/images/wisata')}}/{{ $item->cover }}" title="{{ $item->nama }}" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="{{route('wisata.detail', $item->id)}}" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Peta bukan hanya gambar, tapi jendela ke dunia. 
                            SIG membuka pintu untuk menjelajahi dunia yang tersembunyi di balik peta.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Team</h2>
                    <p>Our Great Team</p>
                </div>

                <div class="row" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('assets/images/landingpage/team/tenia.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Tenia Febrianti</h4>
                                <span>Fullstack Developer</span>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/teniafebrianti/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    <a href="https://tenteniaa.netlify.app/" target="_blank"><i class="bi bi-link"></i></a>
                                    <a href="https://github.com/tenteniaa/" target="_blank"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="{{ asset('assets/images/landingpage/team/sabrina.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Sabrina Desy Rahmawati</h4>
                                <span>UI/UX Designer</span>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/sabrina-desy-rahmawati-a8214a240/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    <a href="https://medium.com/@sabrinadrah" target="_blank"><i class="bi bi-medium"></i></a>
                                    <a href="https://www.instagram.com/sabrinadr._/" target="_blank"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="{{ asset('assets/images/landingpage/team/fia.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Alifia Prastiwi</h4>
                                <span>UI/UX Designer</span>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/alifiaprastiwi/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    <a href="https://medium.com/@alifia1209" target="_blank"><i class="bi bi-medium"></i></a>
                                    <a href="https://www.instagram.com/alifiaprr_/" target="_blank"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="{{ asset('assets/images/landingpage/team/nora.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Alfina Nurul Azizah</h4>
                                <span>Fullstack Developer</span>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/alfinanora/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    <a href="https://www.instagram.com/alfina_nora/" target="_blank"><i class="bi bi-instagram"></i></a>
                                    <a href="https://github.com/alfinanora" target="_blank"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->
@endsection

@push('scripts')
<script>
function initializeMap() {
    var map = L.map('map').setView([-7.08777, 110.36230], 10);
  
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    var filteredMarkers = [];
    var polygon;

    function clearFilteredMarkers() {
        // Hapus semua marker yang ada di filteredMarkers
        filteredMarkers.forEach(function (marker) {
            map.removeLayer(marker);
        });

        // Kosongkan array filteredMarkers
        filteredMarkers = [];
    }

    function toggleMarkers() {
         // Hapus polygon jika sudah ada sebelumnya
        if (polygon) {
            map.removeLayer(polygon);
        }
    
        clearFilteredMarkers();

        var filteredLatLngs = [];

        if (
            !document.getElementById('checkbox_jenis_1').checked &&
            !document.getElementById('checkbox_jenis_2').checked &&
            !document.getElementById('checkbox_jenis_3').checked &&
            !document.getElementById('checkbox_region_1').checked &&
            !document.getElementById('checkbox_region_2').checked
        ) {
            // Jika tidak ada filter yang aktif, tampilkan semua marker
            @foreach($wisata as $item)
                var popupContent = @json(view('pages.popup', ['wisata' => $item])->render());
                var marker = L.marker([{{ $item->latitude }}, {{ $item->longitude }}])
                    .addTo(map)
                    .bindPopup(popupContent);
                filteredMarkers.push(marker);
            @endforeach

        } else {
            // Jika ada filter yang aktif, terapkan filter dan tampilkan marker sesuai kondisi
            @foreach($wisata as $item)
                var showMarker = true;

                // Jenis
                var jenis1Checked = document.getElementById('checkbox_jenis_1').checked;
                var jenis2Checked = document.getElementById('checkbox_jenis_2').checked;
                var jenis3Checked = document.getElementById('checkbox_jenis_3').checked;
                // Region
                var region1Checked = document.getElementById('checkbox_region_1').checked;
                var region2Checked = document.getElementById('checkbox_region_2').checked;

                // Cek apakah jenis sesuai
                var jenisSesuai = false;

                @foreach($alam as $jenis)
                    if ({{ $jenis->id_wisata }} === {{ $item->id }} && jenis1Checked) {
                        jenisSesuai = true;
                        fillColor = '#e58c8c';
                        borderColor = '#e58c8c';
                    }
                @endforeach

                @foreach($sejarah as $jenis)
                    if ({{ $jenis->id_wisata }} === {{ $item->id }} && jenis2Checked) {
                        jenisSesuai = true;
                        fillColor = '#936e6e';
                        borderColor = '#936e6e';
                    }
                @endforeach
                
                @foreach($hiburan as $jenis)
                    if ({{ $jenis->id_wisata }} === {{ $item->id }} && jenis3Checked) {
                        jenisSesuai = true;
                        fillColor = '#cdd13c';
                        borderColor = '#cdd13c';
                    }
                @endforeach
                
                // Cek apakah region sesuai
                var regionSesuai = false;
                
                if ({{ $item->id_region }} == 1 && region1Checked) {
                    regionSesuai = true;
                    fillColor = '#3bb6f8';
                    borderColor = '#3bb6f8';
                }

                if ({{ $item->id_region }} == 2 && region2Checked) {
                    regionSesuai = true;
                    fillColor = '#1e5e81';
                    borderColor = '#1e5e81';
                }
            
                // Tambahkan marker sesuai kondisi
                if (
                    (jenis1Checked && jenisSesuai && !region1Checked && !region2Checked) ||
                    (jenis2Checked && jenisSesuai && !region1Checked && !region2Checked) ||
                    (jenis3Checked && jenisSesuai && !region1Checked && !region2Checked) ||
                    (region1Checked && regionSesuai && !jenis1Checked && !jenis2Checked && !jenis3Checked) ||
                    (region2Checked && regionSesuai && !jenis1Checked && !jenis2Checked && !jenis3Checked) ||
                    (region1Checked && jenis1Checked && jenisSesuai && regionSesuai) ||
                    (region1Checked && jenis2Checked && jenisSesuai && regionSesuai) ||
                    (region1Checked && jenis3Checked && jenisSesuai && regionSesuai) ||
                    (region2Checked && jenis1Checked && jenisSesuai && regionSesuai) ||
                    (region2Checked && jenis2Checked && jenisSesuai && regionSesuai) ||
                    (region2Checked && jenis3Checked && jenisSesuai && regionSesuai)
                ) {
                    var latlng = [{{ $item->latitude }}, {{ $item->longitude }}];
                    var popupContent = @json(view('pages.popup', ['wisata' => $item])->render());
                    
                    var marker = L.marker(latlng)
                        .addTo(map)
                        .bindPopup(popupContent);
                    filteredMarkers.push(marker);
                    filteredLatLngs.push(latlng);
                }

            @endforeach

            // Polygon
            if (filteredLatLngs.length > 0) {
                polygon = L.polygon(filteredLatLngs, { fillColor: fillColor, color: borderColor }).addTo(map);
                // map.fitBounds(polygon.getBounds());
            }

        }
    }

    document.getElementById('checkbox_jenis_1').addEventListener('change', toggleMarkers);
    document.getElementById('checkbox_jenis_2').addEventListener('change', toggleMarkers);
    document.getElementById('checkbox_jenis_3').addEventListener('change', toggleMarkers);
    document.getElementById('checkbox_region_1').addEventListener('change', toggleMarkers);
    document.getElementById('checkbox_region_2').addEventListener('change', toggleMarkers);

    toggleMarkers();

    map.addControl(new L.Control.Fullscreen());
}

document.addEventListener('DOMContentLoaded', initializeMap);
</script>
@endpush