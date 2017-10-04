<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li @yield('nav1')>
            <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        
        <li @yield('nav2')>
            <a href="{{URL::Route('about.index')}}">
            <i class="fa fa-user"></i> <span>About</span>
            </a>
        </li>
        <li @yield('nav3')>
            <a href="{{URL::Route('achievement.index')}}">
            <i class="fa fa-suitcase"></i> <span>Achievement</span>
            </a>
        </li>
        <li @yield('nav4')>
            <a href="{{URL::Route('hasilriset.index')}}">
            <i class="fa fa-phone"></i> <span>Hasil Riset</span>
            </a>
        </li>
        <li @yield('nav5')>
            <a href="{{URL::Route('gallery.index')}}">
            <i class="fa fa-newspaper-o"></i> <span>Gallery</span>
            </a>
        </li>
        
        <li @yield('nav6')>
            <a href="{{URL::Route('blog.index')}}">
            <i class="fa fa-file-text-o"></i> <span>Blog</span>
            </a>
        </li>
        <li @yield('nav7')>
            <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Jurnal</span>
            </a>
        </li>
        <li @yield('nav7')>
            <a href="{{URL::Route('pagesetting.index')}}">
            <i class="fa fa-file-text-o"></i> <span>Page Setting</span>
            </a>
        </li>
        

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>