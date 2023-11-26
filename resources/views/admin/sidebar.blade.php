<!-- sidebar -->
<div class="col-md-3 left_col" style="position: fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      {{-- <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Kelompok 7</span></a> --}}
      <a href="/">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid">
        <span>TOEJOE</span>
      </a>
    </div>
    <div class="clearfix"></div>
    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{ asset('assets/images/dashboard/user.png') }}" alt="" class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{ Auth::user()->name }}</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
          <li><a href="{{ route('wisata.view') }}"><i class="fa fa-map-marker"></i> Wisata</a></li>
        </ul>
      </div>
      <div class="menu_section">
        <h3>More</h3>
        <ul class="nav side-menu">
          <li><a href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu --
    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">x</button>
          </div>
          <div class="modal-body">Are you sure you want to sign out?</div>
          <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
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
