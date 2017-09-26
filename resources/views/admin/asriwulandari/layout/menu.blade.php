<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li @yield('nav1')>
            <a href="{{URL::Route('dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        
        <li @yield('nav2')>
            <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Slider</span>
            </a>
        </li>
        <li @yield('nav3')>
            <a href="#">
            <i class="fa fa-suitcase"></i> <span>Profile About</span>
            </a>
        </li>
        <li @yield('nav4')>
            <a href="#">
            <i class="fa fa-user"></i> <span>Latest Journal</span>
            </a>
        </li>
        <li @yield('nav5')>
            <a href="#">
            <i class="fa fa-phone"></i> <span>Gallery</span>
            </a>
        </li>
        <li @yield('nav6')>
            <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Blog</span>
            </a>
        </li>
        

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>