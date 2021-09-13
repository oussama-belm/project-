@extends('layouts.app2')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <link rel="stylesheet" href="/css/product.css">

    <link rel="stylesheet" href="/css/head.css">
    <title>product</title>
</head>
<body>
<form action="/addpanier/{{ Auth::user()->id }}/{{ $product->id}}" method="post">
    @csrf
    <main class="main container">
        <div class="row">
            <div class="shoe">
                <div class="shoe-figure">
                    <div>
                        <img class="@if ($product->category =="shoe") shoe-img @else other-img @endif" src="/storage/{{ $product->image }}" alt="">
                  </div>

                    <div class="dots">
                        <span class="dot dot-color-1 active"></span>
                        <span class="dot dot-color-2"></span>
                    </div>

                </div>


            </div>
            <div class="info">
                <div class="shoe-info">
                    <span class="info-subtitle">product info</span>
                    <h1 class="info-title">{{ $product->libele }}</h1>
                    <p class="info-description">{{ $product->description }}</p>
                </div>

                <div class="info-down">
                    <div class="size">
                        <h3 class="size-title">Total</h3>
                        <div class="size-content">
                            <span class="size-total active">{{ $product->quantite }}</span>
                        </div>
                    </div>
                    <div class="size">
                        <h3 class="size-title">Category</h3>
                        <div class="size-content">
                            <span class="size-total active">{{ $product->category }}</span>
                        </div>
                    </div>

                    <div class="count">
                        <h3 class="count-title">Count</h3>
                        <div class="count-content">
                                <!-- product qty section -->
                                <div id="field1">
                                    <button type="button" id="sub" class="sub">-</button>
                                    <input name="count" class="ml-2 nbrproduct" type="number" id="1 lon3" value="1" min="1" max="{{ $product->quantite }}"/>
                                    <button type="button" id="add" class="add">+</button>
                                </div>

                                <!-- !product qty section -->
                        </div>
                    </div>
                </div>
                <div class="price-product-">
                    <span class="price-product--title">${{ $product->prix }}</span>
                    <button type="submit" class="price-product--button btnp addtopanier">ADD TO CART</button>
                </div>
            </div>
        </div>
    </main>
</form>
    <script>
            $('.add').click(function () {
            if ($(this).prev().val() < {{ $product->quantite }}) {
            $(this).prev().val(+$(this).prev().val() + 1);
            }
        });
        $('.sub').click(function () {
            if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>

    <script>
        gsap.from('.shoe-figure',{opacity:0,duration:1,delay:.5,x:-100});
        gsap.from('.shoe-img',{opacity:0,duration:1,delay:1,y:-50});
        gsap.from('.dots',{opacity:0,duration:1,delay:1.5,y:510});
        gsap.from('.shoe-info',{opacity:0,duration:2,delay:.5,y:-50});
        gsap.from('.size',{opacity:0,duration:1,delay:2.2,x:-100});
        gsap.from('.count',{opacity:0,duration:1,delay:2.5,x:100});
        gsap.from('.price-product--title',{opacity:0,duration:3,delay:.5,y:50});
        gsap.from('.price-product--button',{opacity:0,duration:3,delay:.5,y:-50});
        gsap.from('nav-item',{
        opacity:0,duration:1,delay:1.2,y:30,stagger:.2});
    </script>


</body>
</html>

@endsection
