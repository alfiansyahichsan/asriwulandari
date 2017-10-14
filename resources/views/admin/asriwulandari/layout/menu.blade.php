<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li @yield('nav1')>
            <a href="{{URL::Route('asridashboard')}}">
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
            <i class="ion ion-ribbon-b"></i> <span>Achievement</span>
            </a>
        </li>
        <li @yield('nav4')>
            <a href="{{URL::Route('hasilriset.index')}}">
            <i class="ion ion-map"></i> <span>Hasil Riset</span>
            </a>
        </li>
        <li @yield('nav5')>
            <a href="{{URL::Route('gallery.index')}}">
            <i class="ion ion-images"></i> <span>Gallery</span>
            </a>
        </li>
        
        <li @yield('nav6')>
            <a href="{{URL::Route('asriwulandari.blog.index')}}">
            <i class="fa fa-file-text-o"></i> <span>Blog</span>
            </a>
        </li>
        <li @yield('nav7')>
            <a href="{{URL::Route('asriwulandari.journal.index')}}">
            <i class="ion ion-ios-bookmarks-outline"></i> <span>Jurnal</span>
            </a>
        </li>
        <li @yield('nav8')>
            <a href="{{URL::Route('pagesetting.index')}}">
            <i class="ion ion-ios-gear-outline"></i> <span>Page Setting</span>
            </a>
        </li>
        

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>