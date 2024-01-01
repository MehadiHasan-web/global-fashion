<header class="header-area header-padding-1 sticky-bar header-res-padding clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <!-- <img alt="" src="{{ asset('frontend/img/logo/logo.png') }}"> -->
                        <h2>SHAMS BD</h2>
                    </a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</i></a></li>
                            <li><a href="{{ route('shop') }}"> Shop <i class="fa fa-angle-down"></i> </a>
                                <ul class="mega-menu">
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Categories</a></li>
                                            @isset($categories)
                                                @foreach ($categories as $item)
                                                    <li><a href="#">{{ $item->name }}</a></li>
                                                @endforeach
                                            @endisset

                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Sub Category</a></li>
                                            @isset($subcategories)
                                                @foreach ($subcategories as $item)
                                                    <li><a href="#">{{ $item->name }}</a></li>
                                                @endforeach
                                            @endisset
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="mega-menu-img"><a href="shop.html"><img
                                                        src="{{ asset('frontend/img/banner/banner-12.png') }}"
                                                        alt=""></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html"> Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-8">
                <div class="header-right-wrap">
                    <div class="same-style header-search">
                        <a class="search-active" href="#">
                            <svg style="width: 23px; color: #3c3939;" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </a>
                        <div class="search-content">
                            <form action="#">
                                <input type="text" placeholder="Search" />
                                <button class="button-search">
                                    <svg style="width: 23px; color: #3c3939;" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="same-style account-satting">
                        <a class="account-satting-active" href="#">
                            <svg style="width: 23px; color: #3c3939;" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                        </a>
                        <div class="account-dropdown">
                            <ul>
                                <li><a href="login-register.html">Login</a></li>
                                <li><a href="login-register.html">Register</a></li>
                                <li><a href="wishlist.html">Wishlist </a></li>
                                <li><a href="my-account.html">my account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="same-style header-wishlist">
                        <a href="wishlist.html">
                            <svg style="width: 23px; color: #3c3939;" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                        </a>
                    </div>
                    <div class="same-style cart-wrap">
                        <button class="icon-cart">
                            <svg style="width: 23px; color: #3c3939;" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>

                            <span class="count-style">02</span>
                        </button>
                        <div class="shopping-cart-content">
                            <ul>
                                <li class="single-shopping-cart">
                                    <div class="shopping-cart-img">
                                        <a href="#"><img alt=""
                                                src="{{ asset('frontend/img/cart/cart-1.png') }}"></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="#">T- Shart & Jeans </a></h4>
                                        <h6>Qty: 02</h6>
                                        <span>$260.00</span>
                                    </div>
                                    <div class="shopping-cart-delete">
                                        <a href="#"><i class="fa fa-times-circle"></i></a>
                                    </div>
                                </li>
                                <li class="single-shopping-cart">
                                    <div class="shopping-cart-img">
                                        <a href="#"><img alt=""
                                                src="{{ asset('frontend/img/cart/cart-2.png') }}"></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="#">T- Shart & Jeans </a></h4>
                                        <h6>Qty: 02</h6>
                                        <span>$260.00</span>
                                    </div>
                                    <div class="shopping-cart-delete">
                                        <a href="#"><i class="fa fa-times-circle"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="shopping-cart-total">
                                <h4>Shipping : <span>$20.00</span></h4>
                                <h4>Total : <span class="shop-total">$260.00</span></h4>
                            </div>
                            <div class="shopping-cart-btn btn-hover text-center">
                                <a class="default-btn" href="cart-page.html">view cart</a>
                                <a class="default-btn" href="checkout.html">checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-area">
            <div class="mobile-menu">
                <nav id="mobile-menu-active">
                    <ul class="menu-overflow">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('shop') }}">Shop</a></li>

                        <li><a href="#">Category</a>
                            <ul>
                                @isset($categories)
                                    @foreach ($categories as $item)
                                        <li><a href="#">{{ $item->name }}</a></li>
                                    @endforeach
                                @endisset
                            </ul>
                        </li>
                        <li><a href="blog.html">Sub Category</a>
                            <ul>
                                @isset($subcategories)
                                    @foreach ($subcategories as $item)
                                        <li><a href="#">{{ $item->name }}</a></li>
                                    @endforeach
                                @endisset
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
