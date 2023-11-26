<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
      <nav class="nav navbar-nav">
      <ul class=" navbar-right">
        <li class="nav-item dropdown open" style="padding-left: 15px;">
          <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('assets/images/dashboard/user.png') }}" alt="">{{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item"  href="javascript:;"><i class="fa fa-user pull-right"></i> Profile</a>
            <a class="dropdown-item"  href="javascript:;"><i class="fa fa-cog pull-right"></i> Setting</a>
            <a class="dropdown-item"  href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->

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