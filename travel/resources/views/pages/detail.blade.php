
@extends('layouts.app')


@section('title', 'Detail Travel')


@section('content')
  <main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  Paket Travel
                </li>
                <li class="breadcrumb-item active">
                  Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Iselwalt</h1>
              <p>
                Switzerland
              </p>
              <div class="gallery">
                <div class="xzoom-container">
                  <img src="frontend/images/pic-1.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/pic-1.jpg">
                </div>

                <div class="xzoom-thumbs">
                  <a href="frontend/images/image-preview/pic-2-preview.jpg">
                  <img src="frontend/images/pic-2.jpg" class="xzoom-gallery"
                  width="128" xpreview="frontend/images/image-preview/pic-2-preview.jpg">
                  </a>

                  <a href="frontend/images/image-preview/pic-3-preview.jpg">
                  <img src="frontend/images/pic-3.jpg" class="xzoom-gallery"
                  width="128" xpreview="frontend/images/image-preview/pic-3-preview.jpg">
                  </a>

                  <a href="frontend/images/image-preview/pic-4-preview.jpg">
                  <img src="frontend/images/pic-4.jpg" class="xzoom-gallery"
                  width="128" xpreview="frontend/images/image-preview/pic-4-preview.jpg">
                  </a>

                  <a href="frontend/images/image-preview/pic-5-preview.jpg">
                  <img src="frontend/images/pic-5.jpg" class="xzoom-gallery"
                  width="128" xpreview="frontend/images/image-preview/pic-5-preview.jpg">
                  </a>

                  <a href="frontend/images/image-preview/pic-6-preview.jpg">
                  <img src="frontend/images/pic-6.jpg" class="xzoom-gallery"
                  width="128" xpreview="frontend/images/image-preview/pic-6-preview.jpg">
                  </a>
                </div>
              </div>

              <h2>Tentang Wisata</h2>
              <p>
                Iseltwald is a village and municipality on 
                the southern shore of Lake Brienz in the Bernese Oberland region of Switzerland. 
                Politically, the municipality is located in the Interlaken-Oberhasli 
                administrative district of the canton of Bern. Iseltwald is a popular destination for
                backpackers and skiers in the Jungfraujoch region. 
                The village has a host of backpacker hostels and Bed and Breakfasts. 
              </p>
              <p>
                Iseltwald is a village and municipality on 
                the southern shore of Lake Brienz in the Bernese Oberland region of Switzerland
              </p>
              <div class="features row">
                <div class="col-md-4">
                  <img src="frontend/images/icon/icon-event@2x.png" alt="" class="features-image">
                  <div class="description">
                    <h3>Featured Event</h3>
                    <p>Tari Kecak</p>
                  </div>
                </div>

                <div class="col-md-4 border-left">
                  <img src="frontend/images/icon/Icon-language@2x.png" alt="" class="features-image">
                  <div class="description">
                    <h3>Language</h3>
                    <p>German</p>
                  </div>
                </div>

                <div class="col-md-4 border-left">
                  <img src="frontend/images/icon/Icon-food@2x.png" alt="" class="features-image">
                  <div class="description">
                    <h3>Foods</h3>
                    <p>Local Food</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members Are Going</h2>
              <div class="member my-2">
                <img src="frontend/images/member-details/member-1.png" class="member-image mr-1">

                <img src="frontend/images/member-details/member-2.png" class="member-image mr-1">

                <img src="frontend/images/member-details/member-3.png" class="member-image mr-1">

                <img src="frontend/images/member-details/member-4.png" class="member-image mr-1">

                <img src="frontend/images/member-details/member-6.png" class="member-image mr-1">
              </div>
              <hr>
              <h2>Trip Information</h2>
              <table class="trip-information">
                <tr>
                  <th width="50%">Date Of Departure</th>
                  <td width="50%" class="text-right">
                    15 May, 2021
                  </td>
                </tr>

                <tr>
                  <th width="50%">Duration</th>
                  <td width="50%" class="text-right">
                   4D 3N
                  </td>
                </tr>

                <tr>
                  <th width="50%">Type of Trip</th>
                  <td width="50%" class="text-right">
                    Open Public
                  </td>
                </tr>

                <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">
                    $80,00/Person
                  </td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <a href="checkout.html" class="btn btn-block btn-join-now mt-3 py-2">
                Join Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@stop


@push('prepend-style')
  <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush


@push('addon-script')
  <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth:500,
        title: false,
        tint:'#333',
        Xoffset: 15
      });
    });
  </script>
@endpush


