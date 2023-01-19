@extends ('layouts.template')

@section('judul')
    Welcome
@endsection

@section('hero')
      <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h2 data-aos="fade-down">Hanjaya Perkasa Metals 
              <br>
            <span>Indonesia </span></h2>
            <p data-aos="fade-up">P.T. H.P. Metals Indonesia is an aluminium extrusion manufacturer which was first established in 1995, in the city of Mojokerto, East Java.
                                  For over 25 years, we have offered wide-range of outstanding quality products and services, and has been the global and local supplier for Architectural and Building Construction, Electronics and Electrical Parts, Furniture & Automobile Industries.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="{{url('/order')}}" class="btn-get-started">Make Order</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url({{asset('theme/img/hero-carousel/hero-carousel-1.jpg)')}}"></div>
      <div class="carousel-item" style="background-image: url({{asset('theme/img/hero-carousel/hero-carousel-2.jpg)')}}"></div>
      <div class="carousel-item" style="background-image: url({{asset('theme/img/hero-carousel/hero-carousel-3.jpg)')}}"></div>
      <div class="carousel-item" style="background-image: url({{asset('theme/img/hero-carousel/hero-carousel-4.jpg)')}}"></div>
      <div class="carousel-item" style="background-image: url({{asset('theme/img/hero-carousel/hero-carousel-5.jpg)')}}"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section>
  <!-- End Hero Section -->

@endsection

@section('main')

<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-4 about-img" style="background-image: url(theme/img/about.jpg);"></div>

          <div class="col-lg-13">
            <h2>Hanjaya Perkasa Metals Indonesia</h2>
            <div class="our-story">
              <h4>About Us</h4>
              <h3>25 Years Experience</h3>
              <p>P.T. H.P. Metals Indonesia 
                <br>is an aluminium extrusion manufacturer which was first established in 1995,
                <br>in the city of Mojokerto, East Java.</p>
              <p>For over 25 years, 
                <br>we have offered wide-range of outstanding quality products and services, 
                <br>and has been the global and local supplier for Architectural and Building Construction, 
                <br>Electronics and Electrical Parts, Furniture & Automobile Industries.</p>
                <a data-aos="fade-up" data-aos-delay="100" href="{{url('/about')}}" class="btn-get-started">Readmore</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->


@endsection