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
                    <span>{{ Cart::instance('default')->count() }}</span></span>
                    @endif
                </a>
            </li>
        </ul>
        @endif
    </div> <!-- end top-nav -->
</header>
