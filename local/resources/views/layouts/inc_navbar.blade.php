<header class="main-header">
    <!-- Logo -->
    <a href="{{url('allproduct')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PMC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pharmacy System</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Alexander Pierce ( Admin )</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
             <!--  <li class="user-header">
                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li> -->
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <a href="#">Alexander Pierce ( Admin )</a>
                  </div>
                  <!-- <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div> -->
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                 <!--  <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                 <button type="button" class="btn btn-flat btn-success" >Online</button>
                </div>
                <div class="pull-right">
                   {{-- <a href=" ">LOG OUT</a> --}}
                   <a href="{{route('logout')}}" class="btn btn-default btn-flat"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    LOG OUT
                  </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>   
              
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>