@extends('layouts.app')


@section('title')
    NOMADS
@stop


@section('content')
        
  <!-- header -->
  <header class="text-center">
    <h1>
      Explore The Beautiful World
      <br>
      As Easy One Click
    </h1>

    <p class="mt-3">
      You Will See Beautiful
      <br>
      Moment You Never See Before
    </p>

    <a href="#" class="btn btn-get-started px-4 mt-4">
      Get Started
    </a>
  </header>
  
  <!-- Statistik -->
  <main>
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
          <h2>20K</h2>
          <P>Members</P>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>12</h2>
          <P>Countries</P>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>3K</h2>
          <P>Hotels</P>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>72</h2>
          <P>Partners</P>
        </div>
      </section>
    </div>
  </main>

  <!-- popular -->
<section class="section-popular" id="popular">
  <div class="container">
    <div class="row">
      <div class="col text-center section-popular-heading">
        <h2>Wisata Popular</h2>
        <p>
          Something That You Never Try
          <br>
          Before in this World 
        </p>
      </div>
    </div>
  </div>

  <section class="section-popular-content" id="popularContent">
    <div class="container">
      <div class="section-popular-travel row justify-content-center">
        
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column"
          style="background-image: url('frontend/images/popular/popular-1@2x.jpg');">
            <div class="travel-country">Switzerland</div>
            <div class="travel-location">Iseltwalt</div>
            <div class="travel-button mt-auto">
              <a href="details.html" class="btn btn-travel-details px-4">View Details</a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column"
          style="background-image: url('frontend/images/popular/popular-2@2x.jpg');">
            <div class="travel-country">Maldives</div>
            <div class="travel-location">Meeru Island</div>
            <div class="travel-button mt-auto">
              <a href="details.html" class="btn btn-travel-details px-4">View Details</a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column"
          style="background-image: url('frontend/images/popular/popular-3@2x.jpg');">
            <div class="travel-country">Saudi Arabia</div>
            <div class="travel-location">Mekkah</div>
            <div class="travel-button mt-auto">
              <a href="details.html" class="btn btn-travel-details px-4">View Details</a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column"
          style="background-image: url('frontend/images/popular/popular-4@2x.jpg');">
            <div class="travel-country">Japan</div>
            <div class="travel-location">Tokyo</div>
            <div class="travel-button mt-auto">
              <a href="details.html" class="btn btn-travel-details px-4">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

<!-- network -->
  <section class="section-network" id="network">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Our Networks</h2>
          <p>
            Companies are trusted us
            <br>
            more than just a trip
          </p>
        </div>

        <div class="col-md-8 text-center">
          <img src="frontend/images/popular/Group 5@2x.png" alt="logo_partner" class="img-partner">
        </div>
      </div>
    </div>
  </section>

  <!-- testimonial -->
  <section class="section-testimonial-heading">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>They Are Loving Us</h2>
          <p>Moment Were Giving Them
            <br>
            The Best Experience
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-testimonial-content" id="testimonialContent">
    <div class="container">
      <div class="section-popular-travel row justify-content-center">
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="frontend/images/user/User_pic.jpg" alt="user" class="mb-4 rounded-circle">
              <h3>Ersyal Muhammad</h3>
              <p class="testimonial">
                "It was glorious and I could 
                not stop to say wohooo for 
                every single moment
                Dankeeeeee"
              </p>
              <hr>
              <p class="trip-to mt-2">
                Trip To Meeru Island, Maldives
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="frontend/images/user/User_pic_2.jpg" alt="user" class="mb-4 rounded-circle">
              <h3>Heni Nuraeni</h3>
              <p class="testimonial">
                "It was glorious and I could 
                not stop to say wohooo for 
                every single moment
                Dankeeeeee"
              </p>
              <hr>
              <p class="trip-to mt-2">
                Trip To Mekkah, Saudi Arabia
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="frontend/images/user/User_pic_3.jpg" alt="user" class="mb-4 rounded-circle">
              <h3>Spongebob</h3>
              <p class="testimonial">
                "It was glorious and I could 
                not stop to say wohooo for 
                every single moment
                Dankeeeeee"
              </p>
              <hr>
              <p class="trip-to mt-2">
                Trip To Iselwalt, Switzerland
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>

          <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
        </div>
      </div>
    </div>
  </section>

@endsection
