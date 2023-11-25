<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center {{ Route::is('wisata.detail') ? '' : 'header-transparent' }}">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="/">
          <img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid">
          <span>TOEJOE</span>
        </a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#discover">Discover</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <a class="btn-login scrollto" href="{{ route('login') }}">Login</a>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- navbar -->

    </div>
</header><!-- End Header -->