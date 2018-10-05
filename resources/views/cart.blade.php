@extends('layout')

@section('title', 'Carrito de compras')

@section('extra-css')

@endsection

@section('content')

    {{-- <div class="breadcrumbs">
        <div class="container">
            <a href="#">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shopping Cart</span>
        </div>
    </div> --}}
<div class="container">
    <nav class="primary-style navbar navbar-expand-lg navbar-dark primary-color mt-5">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('shop.index') }}">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Carrito</li>
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

<div class="cart-section container">
    <div>
         @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        @if(Cart::count() > 0)

        <h2><strong>{{ Cart::count() > 0}} producto(s) en la cesta de compras</strong></h2>
        <div class="card pl-3 pr-3 pt-3">
            <div class="cart-table">
            @foreach(Cart::content() as $item)

            <div class="cart-table-row">
                <div class="cart-table-row-left">
                    <a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{ asset('img/products/'.$item->model->slug.'.jpg') }}" alt="{{$item->model->name}}" class="cart-table-img"></a>
                    <div class="cart-item-details">
                        <div class="cart-table-item"><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></div>
                        <div class="cart-table-description">{{ $item->model->details }}</div>
                    </div>
                </div>
                <div class="cart-table-row-right">
                    <div class="cart-table-actions">
                        {{-- <a href="#">Remove</a> <br> --}}
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}

                            {{-- <button type="submit" class="cart-options">Eliminar</button> --}}
                            <span class="btn-group-sm" data-toggle="tooltip" title="Eliminar del carrito">
                              <button type="submit" class="btn btn-danger bmd-btn-fab">
                                <i class="material-icons">close</i>
                              </button>
                            </span>
                        </form>
                        {{-- <a href="#">Save for Later</a> --}}
                        <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}

                            {{-- <button type="submit" class="cart-options">Guardar</button> --}}
                            
                            <span class="btn-group-sm" data-toggle="tooltip" title="Guardar para mas tarde">
                              <button type="submit" class="btn btn-primary bmd-btn-fab">
                                <i class="material-icons">save</i>
                              </button>
                            </span>

                        </form>
                    </div>
                    <div>
 {{--                        <select class="quantity">
                            <option selected="">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select> --}}

                    <select class="form-control" id="exampleSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>

                    </div>
                    <div>{{ $item->model->presentPrice() }}</div>
                </div>
            </div> <!-- end cart-table-row -->

            @endforeach
            </div><!-- end cart-table -->
        

            <a href="#" class="have-code">Tienes un cupón de descuento?</a>

            <form class="form-inline">
              <div class="form-group">
                <label for="exampleInputEmail2" class="bmd-label-floating">Codigo</label>
                <input type="text" class="form-control" id="exampleInputEmail2">
              </div>
              <span class="form-group bmd-form-group"> <!-- needed to match padding for floating labels -->
                <button type="submit" class="btn btn-primary">Aplicar</button>
              </span>
            </form>

             <!-- end have-code-container -->
            <div class="cart-totals">
                <div class="cart-totals-left">El envío es gratuito puede pedir cualquier producto o cunsultar sin costo alguno.
                </div>

                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                        IVA (13%)<br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        {{ presentPrice(Cart::subtotal()) }} <br>
                        {{ presentPrice(Cart::tax()) }} <br>
                        <span class="cart-totals-total"> {{ presentPrice(Cart::total()) }}</span>
                    </div>
                </div>
            </div> <!-- end cart-totals -->
            <div class="cart-buttons">
                <a href="{{ route('shop.index') }}" class="btn btn-raised btn-primary">Seguir comprando</a>
                <a href="{{ route('checkout.index') }}" class="btn btn-raised btn-info">Pasar por caja</a>
            </div>
        </div> 
        

            @else
                
                <h3>No hay productos en el carrito!</h3>
                <div class="spacer"></div>
                    <a href="{{ route('shop.index') }}" class="btn btn-raised btn-primary">Continuar comprando</a>
                <div class="spacer"></div>

            @endif

            @if (Cart::instance('saveForLater')->count() > 0)
            <h2 class="mt-4"><strong>{{ Cart::instance('saveForLater')->count() }} Artículo(s) guardado para más tarde</strong></h2>
        
        <div class="card mt-4 pt-3 pl-3 pr-3 pb-3">

            <div class="saved-for-later cart-table">
                @foreach (Cart::instance('saveForLater')->content() as $item)
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{ asset('img/products/'.$item->model->slug.'.jpg')}}" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></div>
                            <div class="cart-table-description">{{ $item->model->details }}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE')}}

                                {{-- <button type="submit" class="cart-options">Eliminar</button> --}}
                                <span class="btn-group-sm" data-toggle="tooltip" title="Eliminar">
                                  <button type="submit" class="btn btn-danger bmd-btn-fab">
                                    <i class="material-icons">close</i>
                                  </button>
                                </span>
                            </form>
                            {{-- <a href="#">Save for Later</a> --}}
                            <form action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}

                                {{-- <button type="submit" class="cart-options">Mover a carrito</button> --}}
                                <span class="btn-group-sm" data-toggle="tooltip" title="Mover a carrito">
                                  <button type="submit" class="btn btn-primary bmd-btn-fab">
                                    <i class="material-icons">arrow_upward</i>
                                  </button>
                                </span>
                            </form>
                        </div>
                        {{-- <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div> --}}
                        <div>{{ $item->model->presentPrice() }}</div>
                    </div>
                </div> <!-- end cart-table-row -->
                @endforeach

            </div> <!-- end saved-for-later -->
        </div>
        @else

        <h3 class="mt-4"><strong>No tienes artículos guardados para mas tarde</strong></h3>

        @endif

    </div>

</div> <!-- end cart-section -->

    @include('partials.might-like')


@endsection
