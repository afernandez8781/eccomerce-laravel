{{-- 
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ecommerce Example</title>


        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body> --}}


        {{-- <header class="with-background">
            <div class="top-nav container">
                <div class="logo">Laravel Ecommerce</div>
                <ul>
                    <li><a href="{{ route('shop.index') }}">tiendaaa</a></li>
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Blog</a></li>
                    <li>
                        <a href="{{ route('cart.index')}}">Carrito <span class="cart-count">
                            @if (Cart::instance('default')->count() > 0)
                            <span>{{ Cart::instance('default')->count() }}</span></span>
                            @endif
                        </a>
                    </li>
                </ul>
            </div> end top-nav
            <div class="hero container">
                <div class="hero-copy">
                    <h1>Tienda virtual Demo</h1>
                    <p>Includes multiple products, categories, a shopping cart and a checkout system with Stripe integration.</p>
                    <div class="hero-buttons">
                        <a href="#" class="button button-white">Blog Post</a>
                        <a href="#" class="button button-white">GitHub</a>
                    </div>
                </div>

                <div class="hero-image">
                    <img src="img/macbook-pro-laravel.png" alt="hero image">
                </div> 
            </div>
        </header> --}}
        
        
@extends('layout')

@section('title', 'no fijado')

@section('content')

<header class="with-background">
    <div class="hero container">
        <div class="hero-copy">
            <h1 class="text-center font-weight-bold dark-grey-text"><strong>Tienda virtual Demo</strong></h1>
            <p>Includes multiple products, categories, a shopping cart and a checkout system with Stripe integration.</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-raised btn-primary">Screencast2</a>
                <a href="#" class="btn btn-raised btn-info">GitHub</a>
            </div>
        </div>

        <div class="hero-image">
            <img src="img/macbook-pro-laravel.png" alt="hero image">
        </div> 
    </div>
</header>

<div class="featured-section">

    <div class="container">
        {{-- <h1 class="text-center">Laravel Ecommerce</h1> --}}
        <h1 class="text-center font-weight-bold dark-grey-text"><strong>Laravel Ecommerce</strong></h1>

        <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.</p>

        <div class="text-center button-container">
            <a href="#" class="btn btn-raised btn-primary">Featured</a>
            <a href="#" class="btn btn-raised btn-primary">On Sale</a>
        </div>

        {{-- <div class="tabs">
            <div class="tab">
                Featured
            </div>
            <div class="tab">
                On Sale
            </div>
        </div> --}}

    {{--     <div class="products text-center">
            @foreach ($products as $product)
                <div class="product">
                    <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product"></a>
                    <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                    <div class="product-price">{{ $product->presentPrice() }}</div>
                </div>
            @endforeach

        </div>  --}}

    <section>

        <!-- Grid row -->
        <div class="row">
            @foreach ($products as $product)
                <!--Grid column-->
                <div class="col-lg-3 col-md-4  col-sm-6 mb-4">
                    <!--Card-->
                    <div class="card card-ecommerce">

                        <!--Card image-->
                        <div class="text-center">
                            <a href="{{ route('shop.show',$product->slug) }}">
                                <img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" class="img-fluid" alt="{{ $product->name }}">
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body">
                            <!--Category & Title-->

                            <h5 class=" mb-1"><strong><a href="{{ route('shop.show',$product->slug) }}">{{ $product->name }}</a></strong>
                            </h5>
                            <span class="badge badge-info mb-2" style="background: transparent;  margin-left: -12px">|</span>
                            @if($product->featured == 1)
                                <span class="badge badge-danger mb-2">Destacado</span>
                            @endif
                            <!--Card footer-->
                            <div class="card-footer pb-0">
                                <div class="row mb-0">
                                    <span><strong>{{ $product->presentPrice() }}</strong></span>
                                    <span class="float-right">

                                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Grid column-->
            @endforeach
        </div>
        <!--Grid row-->

    </section>


        <div class="text-center button-container">
            <a href="{{ route('shop.index') }}" class="btn btn-raised btn-lg">View more products</a>
        </div>

    </div> <!-- end container -->

</div> 
<!-- end featured-section -->

{{-- <div class="blog-section">
    <div class="container">
        <h4 class="font-weight-bold mt-4 dark-grey-text">
        <strong>LAST ITEMS</strong>
    </h4>
    <hr class="mb-5">

        <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.</p>

        <div class="blog-posts">
            <div class="blog-post" id="blog1">
                <a href="#"><img src="/img/blog1.png" alt="Blog Image"></a>
                <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, tenetur numquam ipsam reiciendis.</div>
            </div>
            <div class="blog-post" id="blog2">
                <a href="#"><img src="/img/blog2.png" alt="Blog Image"></a>
                <a href="#"><h2 class="blog-title">Blog Post Title 2</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, tenetur numquam ipsam reiciendis.</div>
            </div>
            <div class="blog-post" id="blog3">
                <a href="#"><img src="/img/blog3.png" alt="Blog Image"></a>
                <a href="#"><h2 class="blog-title">Blog Post Title 3</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, tenetur numquam ipsam reiciendis.</div>
            </div>
        </div>
    </div> 
</div> 
 --}}

<div class="container">

    <h4 class="text-center font-weight-bold dark-grey-text"><strong>LAST ITEMS</strong></h4>


    <hr class="">

    <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.</p>
    <div class="row">

    @foreach ($products as $product)
    <!--Grid column-->
        <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom: 15px; margin-top: 15px;">
          <div class="card">
            <img class="card-img-top" src="/img/blog1.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <p class="card-text">
              <a href="#" class="btn btn-primary">leer mas</a>
            </p>
          </div>
        </div>
    @endforeach
    </div>
</div>


@endsection

{{--     </body>

</html> --}}
