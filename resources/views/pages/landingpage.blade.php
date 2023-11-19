@extends('user.layout')
@section('main')
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                        data-aos="fade-right"></div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <h3>GeoTour</h3>
                        <p>GeoTour adalah inovasi terkini dalam memanfaatkan teknologi Sistem Informasi Geografis
                            untuk memperkaya pengalaman wisata Anda. Dengan fokus pada destinasi pariwisata,
                            GeoTour Explorer menyajikan pendekatan yang holistik, menggabungkan kekayaan data geografis
                            dengan informasi detail tentang tempat-tempat menarik.</p>
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bxs-landmark"></i></div>
                            <h4 class="title"><a href="#">Memperkaya Pengalaman Pariwisata</a></h4>
                            <p class="description">GeoTour tidak hanya memberikan informasi lokasi, tetapi juga memperkaya
                                pengalaman wisata dengan menyuguhkan informasi yang detail.</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-devices"></i></div>
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
                    <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                        <img src="{{ asset('assets/images/landingpage/details-4.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
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
                                  <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                      <thead>
                                          <tr>
                                              <th>Nama</th>
                                              <th>Alamat</th>
                                              <th>Harga</th>
                                              <th>Fasilitas</th>
                                              <th>Aksi</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($wisata as $item)
                                          <tr>
                                              <td class="table-col">{{ $item->nama }}</td>
                                              <td class="table-col">{{ $item->alamat }}</td>
                                              <td class="table-col">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                              <td class="table-col">{{ $item->fasilitas }}</td>
                                              <td>
                                                <a href="{{route('wisata.detail', $item->id_wisata)}}" class="btn btn-rounded btn-primary"><i class="fa fa-eye"></i></a>
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

                <div class="row g-0" data-aos="fade-left">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                            <a href="{{ asset('assets/images/landingpage/gallery/gallery-1.jpg') }}"
                                class="gallery-lightbox">
                                <img src="{{ asset('assets/images/landingpage/gallery/gallery-1.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                            <a href="{{ asset('assets/images/landingpage/gallery/gallery-2.jpg') }}"
                                class="gallery-lightbox">
                                <img src="{{ asset('assets/images/landingpage/gallery/gallery-2.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                            <a href="{{ asset('assets/images/landingpage/gallery/gallery-3.jpg') }}"
                                class="gallery-lightbox">
                                <img src="{{ asset('assets/images/landingpage/gallery/gallery-3.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                            <a href="{{ asset('assets/images/landingpage/gallery/gallery-4.jpg') }}"
                                class="gallery-lightbox">
                                <img src="{{ asset('assets/images/landingpage/gallery/gallery-4.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                            <a href="{{ asset('assets/images/landingpage/gallery/gallery-5.jpg') }}"
                                class="gallery-lightbox">
                                <img src="{{ asset('assets/images/landingpage/gallery/gallery-5.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                            <a href="{{ asset('assets/images/landingpage/gallery/gallery-6.jpg') }}"
                                class="gallery-lightbox">
                                <img src="{{ asset('assets/images/landingpage/gallery/gallery-6.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                            <a href="{{ asset('assets/images/landingpage/gallery/gallery-7.jpg') }}"
                                class="gallery-lightbox">
                                <img src="{{ asset('assets/images/landingpage/gallery/gallery-7.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                            <a href="{{ asset('assets/images/landingpage/gallery/gallery-8.jpg') }}"
                                class="gallery-lightbox">
                                <img src="{{ asset('assets/images/landingpage/gallery/gallery-8.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Sistem Informasi Geografis adalah peta yang hidup.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Peta bukan hanya gambar, tapi jendela ke dunia. 
                                    SIG membuka pintu untuk menjelajahi dunia yang tersembunyi di balik peta.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    SIG menghadirkan dimensi baru dalam pengambilan keputusan dengan memberikan konteks lokasi pada setiap data.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Dalam era SIG, lokasi bukan lagi sekadar koordinat, tetapi kisah yang mengungkap rahasia dunia.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    SIG: Mengubah data geografis menjadi keputusan yang cerdas.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
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
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="{{ asset('assets/images/landingpage/team/team-2.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="{{ asset('assets/images/landingpage/team/team-3.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="{{ asset('assets/images/landingpage/team/team-4.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->
@endsection
