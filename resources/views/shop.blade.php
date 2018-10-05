@extends('layout')

@section('title', 'Productos')

@section('extra-css')

@endsection

@section('content')



<div class="container">
    <nav class="primary-style navbar navbar-expand-lg navbar-dark primary-color mt-5 mb-5">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tienda</li>
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

   {{--  <div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                <li><a href="#">Laptops</a></li>
                <li><a href="#">Desktops</a></li>
                <li><a href="#">Mobile Phones</a></li>
                <li><a href="#">Tablets</a></li>
                <li><a href="#">TVs</a></li>
                <li><a href="#">Digital Cameras</a></li>
                <li><a href="#">Appliances</a></li>
            </ul>

            <h3>By Price</h3>
            <ul>
                <li><a href="#">$0 - $700</a></li>
                <li><a href="#">$700 - $2500</a></li>
                <li><a href="#">$2500+</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div>
            <h1 class="stylish-heading">Laptops</h1>
            <div class="products text-center">

                @foreach ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product"></a>
                        <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product->presentPrice() }}</div>
                    </div>
                @endforeach

            </div>
        </div>
    </div> --}}



<div class="container">

    <div class="row">

        <!-- Sidebar -->
        <div class="col-lg-2">

            <div class="">
                <!-- Grid row -->
                <div class="row">
                    <!-- Filter by category-->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <h5 class="font-weight-bold dark-grey-text"><strong>Category</strong></h5>
                            <ul>
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">Desktops</a></li>
                                <li><a href="#">Mobile Phones</a></li>
                                <li><a href="#">Tablets</a></li>
                                <li><a href="#">TVs</a></li>
                                <li><a href="#">Digital Cameras</a></li>
                                <li><a href="#">Appliances</a></li>
                            </ul>
                    </div>
                    <!-- /Filter by category-->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <!-- Panel -->
                        <h5 class="font-weight-bold dark-grey-text"><strong>By Price</strong></h5>

                            <li><a href="#">$0 - $700</a></li>
                            <li><a href="#">$700 - $2500</a></li>
                            <li><a href="#">$2500+</a></li>
                    </div>
                </div>
                <!-- /Grid row -->


            </div>

        </div>
        <!-- /.Sidebar -->

        <!-- Content -->
        <div class="col-lg-10">

            <h4 class="text-center font-weight-bold dark-grey-text"><strong>DESTACADOS</strong></h4>
            <!-- Products Grid -->
            <section class="section pt-4">

                <!-- Grid row -->
                <div class="row">
                    @foreach ($products as $product)
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" class="img-fluid" alt="{{ $product->name }}">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->

                                <h5 class="card-title mb-1"><strong><a href="{{ route('shop.show',$product->slug) }}" class="dark-grey-text">{{ $product->name }}</a></strong></h5><span class="badge badge-primary mb-2">Destacado</span>

                                <!--Card footer-->
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                        <span class="float-left"><strong>{{ $product->presentPrice() }}$</strong></span>
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


                <!--Grid row-->
                <div class="row justify-content-center mb-4">

                    <!--Pagination -->
                    <nav class="mb-4">
                        <ul class="pagination pagination-circle pg-blue mb-0">

                            <!--First-->
                            <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">First</a></li>

                            <!--Arrow left-->
                            <li class="page-item disabled">
                                <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>

                            <!--Numbers-->
                            <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

                            <!--Arrow right-->
                            <li class="page-item">
                                <a class="page-link waves-effect waves-effect" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>

                            <!--First-->
                            <li class="page-item clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">Last</a></li>

                        </ul>
                    </nav>
                    <!--/Pagination -->

                </div>
                <!--Grid row-->
            </section>
            <!-- /.Products Grid -->

        </div>
        <!-- /.Content -->

    </div>

</div>
@endsection
