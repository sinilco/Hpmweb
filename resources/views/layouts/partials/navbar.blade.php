  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{asset('theme/img/logo.png')}}" alt=""> -->
        <h1><span><img src="{{asset('theme/img/logonbg.png')}}" alt=""></span>Hanjaya Perkasa Metals</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('/about')}}">About</a></li>
          <li><a href="{{url('/services')}}">Services</a></li>
          <li><a href="{{url('/products')}}">Products</a></li>
          <li><a href="{{url('/projects')}}">Projects</a></li>
          <li><a href="{{url('/contact')}}">Contact</a></li>
          <li><a href="{{url('/login')}}">Order</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a> -->
            <!-- <ul> -->
              <!-- <li><a href="#">Dropdown 1</a></li> -->
              <!-- <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a> -->
                <!-- <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
        </ul>
        <nav>

      <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form> -->

      @auth
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    
  </div>
</header>