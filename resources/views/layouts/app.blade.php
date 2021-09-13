
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'e_commarce') }}</title>



    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/btn.css">
</head>
<body>
    <div id="app">
            <!-- header section strats -->
            <header class="header_section">
                <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container align-items-center ">
                    <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                            <a class="nav-link" href="/">home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="about.html"> About</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="shop.html">Shop </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="furniture.html"> Furniture </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact us</a>
                            </li>


                        </ul>
                        <div class="user_option ">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="auth_li">
                                            <a class="auh_link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="auth_li">
                                            <a class="auh_link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="dropdown auth_li" >
                                            <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->username }}
                                            </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item auh_link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                        </div>
                    </div>
                    <div>
                    <div class="custom_menu-btn ml-3">
                        <button>
                        <span class=" s-1">

                        </span>
                        <span class="s-2">

                        </span>
                        <span class="s-3">

                        </span>
                        </button>

                    </div>
                </div>
                @guest
                @else


                <div class="shoppingCart mt-3 ml-3">
                    <div class="shoppingIcon">
                        <img src="https://rafaelalucas.com/dailyui/12/assets/shopping-cart.svg" alt="">
                        <span class="itemNumber" style="display: flex;">4</span>
                    </div>
                </div>

                @endguest

                </nav>
                </div>
            </header>
            <!-- end header section -->
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script>
    var nav = $("#navbarSupportedContent");
    var btn = $(".custom_menu-btn");
    btn.click
    btn.click(function (e) {
    e.preventDefault();
    nav.toggleClass("lg_nav-toggle");
    document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    });
    </script>
       <script>
        $('.carousel').on('slid.bs.carousel', function () {
         $(".indicator-2 li").removeClass("active");
         indicators = $(".carousel-indicators li.active").data("slide-to");
        a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
        console.log(indicators);

        });
       </script>


        <script>
                window.addEventListener("load", event => {
                    function productHeading() {
                    const btnAdd = document.querySelector('.btn.addtopanier'),
                    btnContainer = document.querySelector('.btnContainer'),
                    wrapper = document.querySelector('.wrapper'),
                    itemNumber = document.querySelector('.itemNumber'),
                    shoppingQuantity = document.querySelector('.shoppingQuantity'),
                    inputQuantity = document.querySelector('.inputQuantity'),
                    plus = document.querySelector('.plus'),
                    minus = document.querySelector('.minus'),

                    shoppingIcon = document.querySelector('.shoppingIcon'),
                    shoppingMenu = document.querySelector('.shoppingMenu'),
                    emptyCart = document.querySelector('.emptyCart');

                let = priceFinal = document.querySelector('.priceFinal'),
                    priceOriginal = document.querySelector('.priceOriginal'),
                    discount = null,
                    sizeNumber = document.querySelector('.sizeNumber'),
                    dropItem = document.querySelectorAll('.dropItem'),
                    maxQuantity = 5,
                    newMaxQuantity = maxQuantity;

                ////////////////
                // Events
                ////////////////

                btnAdd.addEventListener('click', addItem);
                shoppingIcon.addEventListener("click", openShoppingCart);

                // Add items to shopping cart
                function addItem() {
                    let cenas = parseInt(itemNumber.innerText) + 1;
                    if (cenas <= 10) {
                        itemNumber.style.display = "flex";
                        itemNumber.innerText = cenas;
                        shoppingQuantity.innerText = "x" + cenas;
                        itemNumber.classList.add("addItem");
                    }
                    setTimeout(() => {
                        itemNumber.classList.remove("addItem");
                    }, 700);
                }
            }

            productHeading();
            });
        </script>

</body>
</html>
