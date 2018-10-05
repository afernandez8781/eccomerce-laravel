{{-- 
<header>
    <div class="top-nav container">
        <div class="logo"><a href="/">Tienda virtual</a></div>
        @if (! request()->is('checkout'))
        <ul>
            <li><a href="{{ route('shop.index') }}">Tienda</a></li>
            <li><a href="#">Sobre nosotros</a></li>
            <li><a href="#">Blog</a></li>
            <li>
                <a href="{{ route('cart.index')}}">Carrito <span class="cart-count">
                    @if (Cart::instance('default')->count() > 0)
                    <span>{{ Cart::instance('default')->count() }}1</span></span>
                    @endif
                </a>
            </li>
        </ul>
        @endif
    </div>
</header> --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Tienda virtual</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        @if (! request()->is('checkout'))
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('shop.index') }}">Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre nosotros</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">REGÍSTRATE</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="#">INICIAR SESIÓN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('cart.index')}}">Carrito <span class="cart-count">
                    @if (Cart::instance('default')->count() > 0)
                    <span>{{ Cart::instance('default')->count() }}</span></span>
                    @endif
                </a>
              </li>
            </ul>
        @endif
    </div>
</nav>
<!-- end top-nav -->
