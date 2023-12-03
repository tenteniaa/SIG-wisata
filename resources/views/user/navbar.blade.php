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
          <li><a class="nav-link scrollto active" href="/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">About</a></li>
          <li><a class="nav-link scrollto" href="/#discover">Discover</a></li>
          <li><a class="nav-link scrollto" href="/#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="/#team">Team</a></li>
          @auth
          <li class="dropdown btn-login"><a href="#">{{ Auth::user()->name }} <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('dashboard') }}">Dashboard <i class="bi bi-house-door"></i></a></li>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout <i class="bi bi-power"></i></a></li>
            </ul>
          </li>
          @endauth

          @guest
          <a class="btn-login scrollto" href="{{ route('login') }}">Login</a>
          @endguest  
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- navbar -->

    </div>
</header><!-- End Header -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">Are you sure you want to sign out?</div>
          <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
              </form>
          </div>
      </div>
  </div>
</div>