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
                            <li><a href="shop.html"> Shop <i class="fa fa-angle-down"></i> </a>
                                <ul class="mega-menu">
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">shop layout</a></li>
                                            <li><a href="shop.html">standard style</a></li>
                                            <li><a href="shop-filter.html">Grid filter style</a></li>
                                            <li><a href="shop-grid-2-col.html">Grid 2 column</a></li>
                                            <li><a href="shop-no-sidebar.html">Grid No sidebar</a></li>
                                            <li><a href="shop-grid-fw.html">Grid full wide </a></li>
                                            <li><a href="shop-right-sidebar.html">Grid right sidebar</a></li>
                                            <li><a href="shop-list.html">list 1 column box </a></li>
                                            <li><a href="shop-list-fw.html">list 1 column full wide </a></li>
                                            <li><a href="shop-list-fw-2col.html">list 2 column full wide</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">product details</a></li>
                                            <li><a href="product-details.html">tab style 1</a></li>
                                            <li><a href="product-details-2.html">tab style 2</a></li>
                                            <li><a href="product-details-3.html">tab style 3</a></li>
                                            <li><a href="product-details-4.html">sticky style</a></li>
                                            <li><a href="product-details-5.html">gallery style </a></li>
                                            <li><a href="product-details-slider-box.html">Slider style</a></li>
                                            <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                            <li><a href="product-details-6.html">fixed image style </a></li>
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
                            <li><a href="shop.html">Collection</a></li>

                            <li><a href="#">Blog </a>
                            </li>
                            <li><a href="about.html"> About </a></li>
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
                            <svg style="width: 23px; color: #3c3939;" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6">
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
                        <li><a href="{{ route('home') }}">HOME</a>
                            <ul>
                                <li><a href="#">Demo Group 01</a>
                                    <ul>
                                        <li><a href="index.html">Home 1 – Fashion</a></li>
                                        <li><a href="index-2.html">Home 2 – Fashion</a></li>
                                        <li><a href="index-3.html">Home 3 – Fashion</a></li>
                                        <li><a href="index-4.html">Home 4 – Fashion</a></li>
                                        <li><a href="index-5.html">Home 5 – Fashion</a></li>
                                        <li><a href="index-6.html">Home 6 – Fashion</a></li>
                                        <li><a href="index-7.html">Home 7 – Fashion</a></li>
                                        <li><a href="index-8.html">Home 8 – Minimal</a></li>
                                        <li><a href="index-9.html">Home 9 – Electronics</a></li>
                                        <li><a href="index-10.html">Home 10 – Furniture</a></li>
                                        <li><a href="index-11.html">Home 11 - showcase slider</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Demo Group 02</a>
                                    <ul>
                                        <li><a href="index-12.html">Home 12 – Plants</a></li>
                                        <li><a href="index-13.html">Home 13 – Cosmetic</a></li>
                                        <li><a href="index-14.html">Home 14 – Christmas</a></li>
                                        <li><a href="index-15.html">Home 15 – Fruit</a></li>
                                        <li><a href="index-16.html">Home 16 – Black Friday</a></li>
                                        <li><a href="index-17.html">Home 17 – Flower</a></li>
                                        <li><a href="index-18.html">Home 18 – Book</a></li>
                                        <li><a href="index-19.html">Home 19 – Fashion</a></li>
                                        <li><a href="index-20.html">Home 20 – Electronics</a></li>
                                        <li><a href="index-21.html">Home 21 – Furniture</a></li>
                                        <li><a href="index-22.html">Home 22 – Handmade</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Demo Group 03</a>
                                    <ul>
                                        <li><a href="index-23.html">Home 23 – Organic</a></li>
                                        <li><a href="index-24.html">Home 24 – Pet Food</a></li>
                                        <li><a href="index-25.html">Home 25 – Auto Parts</a></li>
                                        <li><a href="index-26.html">Home 26 – Cake Shop</a></li>
                                        <li><a href="index-27.html">Home 27 – Kids Fashion</a></li>
                                        <li><a href="index-28.html">Home 28 – Book Shop</a></li>
                                        <li><a href="index-29.html">Home 29 – Flower Shop</a></li>
                                        <li><a href="index-30.html">Home 30 – Instagram</a></li>
                                        <li><a href="index-31.html">Home 31 – Black Friday</a></li>
                                        <li><a href="index-32.html">Home 32 – Valentine Day</a></li>
                                        <li><a href="index-33.html">Home 33 – Medical Equipment</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Shop</a>
                            <ul>
                                <li><a href="#">shop layout</a>
                                    <ul>
                                        <li><a href="shop.html">standard style</a></li>
                                        <li><a href="shop-filter.html">Grid filter style</a></li>
                                        <li><a href="shop-grid-2-col.html">Grid 2 column</a></li>
                                        <li><a href="shop-no-sidebar.html">Grid No sidebar</a></li>
                                        <li><a href="shop-grid-fw.html">Grid full wide </a></li>
                                        <li><a href="shop-right-sidebar.html">Grid right sidebar</a></li>
                                        <li><a href="shop-list.html">list 1 column box </a></li>
                                        <li><a href="shop-list-fw.html">list 1 column full wide </a></li>
                                        <li><a href="shop-list-fw-2col.html">list 2 column full wide</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">product details</a>
                                    <ul>
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-2.html">tab style 2</a></li>
                                        <li><a href="product-details-3.html">tab style 3</a></li>
                                        <li><a href="product-details-4.html">sticky style</a></li>
                                        <li><a href="product-details-5.html">gallery style </a></li>
                                        <li><a href="product-details-slider-box.html">Slider style</a></li>
                                        <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                        <li><a href="product-details-6.html">fixed image style </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Collection</a></li>
                        <li><a href="#">Pages</a>
                            <ul>
                                <li><a href="about.html">about us</a></li>
                                <li><a href="cart-page.html">cart page</a></li>
                                <li><a href="checkout.html">checkout </a></li>
                                <li><a href="wishlist.html">wishlist </a></li>
                                <li><a href="my-account.html">my account</a></li>
                                <li><a href="login-register.html">login / register </a></li>
                                <li><a href="contact.html">contact us </a></li>
                                <li><a href="404.html">404 page </a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog.html">blog standard</a></li>
                                <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                <li><a href="blog-details.html">blog details 1</a></li>
                                <li><a href="blog-details-2.html">blog details 2</a></li>
                                <li><a href="blog-details-3.html">blog details 3</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
