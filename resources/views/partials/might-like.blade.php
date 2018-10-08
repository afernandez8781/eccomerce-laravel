{{-- <div class="might-like-section">
    <div class="container">
        <h2>También podría gustarte...</h2>
        <div class="might-like-grid">
            @foreach ($mightAlsoLike as $product)
                <a href="{{ route('shop.show', $product->slug) }}" class="might-like-product">
                    <img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product">
                    <div class="might-like-product-name">{{ $product->name }}</div>
                    <div class="might-like-product-price">{{ $product->presentPrice() }}</div>
                </a>
            @endforeach

        </div>
    </div>
</div>
 --}}

<section class="container mt-4">

<h4><strong>TAMBIEN PODRÍA INTERESARTE</strong></h4>
    <!--Grid row-->
    <div class="row mt-4">
        <!--Grid column-->
        <div class="col-12">

            <!-- Grid row -->
            <div class="row">
                @foreach ($mightAlsoLike as $product)
                <!--Grid column-->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
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

        </div>

    </div>
    <!--Grid row-->

</section>