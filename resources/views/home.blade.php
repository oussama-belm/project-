@extends('layouts.app2')

@section('content')
    <!-- slider section -->
    <div class="hero_area mt-0">
        <section class="slider_section mt-0">
          <div class="play_btn">
            <a href="">
              <img src="images/play.png" alt="">
            </a>
          </div>
          <div class="number_box">
            <div>
              <ol class="carousel-indicators indicator-2">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
              </ol>
            </div>
          </div>
          <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                <?php $active = "active" ?>
                @foreach ($evens as $ev)
                <div class="carousel-item {{ $active }}">
                    <?php $active = "" ?>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="detail-box">
                        <h1>
                          The Latest
                          <span>
                            Evenements
                          </span>
                        </h1>
                        <p>
                         {{ $ev->description }}
                        </p>
                        <div class="btn-box">
                          <a href="#" class="btn-1 " >
                            {{ $ev->date_debut }}
                          </a>
                          <a href="#" class="btn-2">
                            {{ $ev->date_fin }}
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 img-container">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>

                @endforeach

              </div>
            </div>
          </div>
        </section>
        </div>
        <!-- end slider section -->

       <!-- brand section -->

      <section class="brand_section mt-5">
        <div class="container">
          <div class="heading_container">
            <h2>
              Featured Brands
            </h2>
          </div>
          <div class="brand_container layout_padding2">

                @foreach ($product as $prod)
            @if ($prod->category == "shoe")
                <div class="card" onclick="window.location.href='product/{{ $prod->id }}';">
                    <img class="img1" src="/storage/{{ $prod->image }}" alt="">
                    <div class="information" >
                        <H1 class="title">{{ $prod->libele }}</H1>
                        <div class="price" >${{ $prod->prix }}</div>
                        <p class="description">{{ $prod->description }}</p>
                        <a class="btn" src="#">explore</a>
                    </div>
                </div>
            @endif
                @endforeach
          </div>
          <a href="" class="brand-btn">
            See More
          </a>
        </div>
      </section>


        <section class="brand_section mt-5">
                            <!-- partial:index.partial.html -->
                <head>
                    <link rel="stylesheet" href="css/pagecontent.css">
                </head>
                <body>
                    <div class="container">
                <main class="page-content">
                    @foreach ($product as $prod)
                        @if ($prod->category != "shoe")

                            <div class="cardpagecontent" onclick="window.location.href='product/{{ $prod->id }}';" >
                                <img src="/storage/{{ $prod->image }}" style="pointer-events: none;
                                position: absolute;
                                width: 100%;

                                ">
                                <div class="content">
                                <h2 class="titlepagecontent">{{ $prod->libele }}</h2>
                                <p class="copy">{{ $prod->description }}</p>
                                <div class="price" >${{ $prod->prix }}</div>
                                <button class="btnpagecontent">explore</button>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </main>
            </body>
                <!-- partial -->
            <a href="" class="brand-btn">
                See More
            </a>
            </div>
            </div>
        </section>

        <!-- info section -->
        <section class="info_section layout_padding2 mt-5">
            <div class="container mt-2 pt-3 pb-3">
            <div class="info_logo">
                <h2>
                Ecommarce
                </h2>
            </div>
            <div class="row">

                <div class="col-md-3">
                <div class="info_contact">
                    <h5>
                    About Shop
                    </h5>
                    <div>
                    <div class="img-box">
                        <img src="images/location-white.png" width="18px" alt="">
                    </div>
                    <p>
                        Address
                    </p>
                    </div>
                    <div>
                    <div class="img-box">
                        <img src="images/telephone-white.png" width="12px" alt="">
                    </div>
                    <p>
                        05 49 30 87 68
                    </p>
                    </div>
                    <div>
                    <div class="img-box">
                        <img src="images/envelope-white.png" width="18px" alt="">
                    </div>
                    <p>
                        oo1019848@gmail.com
                    </p>
                    </div>
                </div>
                </div>
                <div class="col-md-3">
                <div class="info_info">
                    <h5>
                    Informations
                    </h5>

                    <p>
                    We Anter and Oussama both developers and been working together on this website
                    </p>

                    @guest
                    @else
                    <form class="az134" action="/admin/login">
                    <button type="submit">
                        admin login
                    </button>
                    </form>
                    @endguest
                </div>
                </div>

                <div class="col-md-3">
                <div class="info_insta">
                    <h5>
                    Instagram
                    </h5>
                </div>
                </div>
                <div class="col-md-3">
                <div class="info_form ">
                    <h5>
                    sell your products
                    </h5>
                    @guest
                    @else
                    <form action="/vendeur/create">
                    <button type="submit">
                        be a seller
                    </button>
                    </form>
                    @endguest
                    <div class="social_box">
                    <a href="">
                        <img src="images/fb.png" alt="">
                    </a>
                    <a href="">
                        <img src="images/twitter.png" alt="">
                    </a>
                    <a href="">
                        <img src="images/linkedin.png" alt="">
                    </a>
                    <a href="">
                        <img src="images/youtube.png" alt="">
                    </a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- end info_section -->
@endsection

