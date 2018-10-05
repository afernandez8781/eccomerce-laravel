@extends('layout')

@section('title', $product->name)

@section('extra-css')

@endsection

@section('content')

 {{--    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <a href="{{ route('shop.index') }}">Shop</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Macbook Pro</span>
        </div>
    </div> --}}

<div class="container">
    <nav class="primary-style navbar navbar-expand-lg navbar-dark primary-color mt-5">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('shop.index') }}">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
              </ol>
            </nav>
    <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="true" aria-label="Toggle navigation"><span class="navbar-toggler-icon" deluminate_imagetype="unknown"></span></button>

        <!-- Collapsible content -->
        <div class="navbar-collapse collapse show" id="navbarSupportedContent1" style="">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
            </ul>
            <!-- Links -->

            <!-- Search form -->
            <form class="search-form" role="search">
                <div class="form-group md-form waves-light waves-effect waves-light">
                    <input type="text" class="form-control" placeholder="Buscar">
                </div>
            </form>
        </div>
        <!-- Collapsible content -->

    </nav>

</div><!-- end breadcrumbs -->


<div class="container">
    <div class="card">
        <div class="product-section container">
            <div class="product-section-image">
                <img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product">
            </div>
            <div class="product-section-information">
                <h1 class="product-section-title"><strong>{{ $product->name }}</strong></h1>
                <div class="product-section-subtitle">{{ $product->details }}</div>
                <span class="badge badge-success">SALE</span>
                <div class="product-section-price">
                    <span class="">
                        <strong>{{ $product->presentPrice() }}</strong>
                    </span>
                    <span class="">
                        <small>
                            <s>$1789</s>
                        </small>
                    </span>
                </div>

                <p>
                    {{ $product->description }}
                </p>

                <p>&nbsp;</p>

                {{-- <a href="#" class="button">Add to Cart</a> --}}
                <form action="{{ route('cart.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="btn btn-raised btn-primary">añadir al carrito</button>
                </form>
            </div>
        </div>
    </div>
</div> 
<!-- end product-section -->


@include('partials.might-like')


@endsection
