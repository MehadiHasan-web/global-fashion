@php
    $setting = DB::table('settings')->first();
@endphp
<aside class="app-side" id="app-side">
    <!-- BEGIN .side-content -->
    <div class="side-content ">
        <!-- BEGIN .user-profile -->
        <div class="user-profile">
            <a href="{{ route('dashboard') }}" class="logo">
                <img class="w-100 h-auto" src="{{ URL::to('storage/settings/' . optional($setting)->logo) }}"
                    alt="Logo">
            </a>
        </div>
        <!-- END .user-profile -->
        <!-- BEGIN .side-nav -->
        <nav class="side-nav">
            <!-- BEGIN: side-nav-content -->
            <ul class="unifyMenu" id="unifyMenu">
                <li>
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <span class="has-icon">
                            <i class="icon-laptop_windows"></i>
                        </span>
                        <span class="nav-title">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <span class="has-icon">
                            <i class="fa-solid fa-layer-group"></i>
                        </span>
                        <span class="nav-title">Category</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('category.index') }}">Index</a>
                        </li>
                        <li>
                            <a href="{{ route('category.create') }}">Create</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <span class="has-icon">
                            <i class="fa-solid fa-bezier-curve"></i>
                        </span>
                        <span class="nav-title">Sub Category</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('subcategory.index') }}">Index</a>
                        </li>
                        <li>
                            <a href="{{ route('subcategory.create') }}">Create</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <span class="has-icon">
                            <i class="fa-solid fa-tags"></i>
                        </span>
                        <span class="nav-title">Tag</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('tag.index') }}">Index</a>
                        </li>
                        <li>
                            <a href="{{ route('tag.create') }}">Create</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <span class="has-icon">
                            <i class="fa-brands fa-product-hunt"></i>
                        </span>
                        <span class="nav-title">Products</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('product.index') }}">Index</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <span class="has-icon">
                            <i class="fa-solid fa-angles-right"></i>
                        </span>
                        <span class="nav-title">Slider</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('slider.index') }}">Index</a>
                        </li>
                        <li>
                            <a href="{{ route('slider.create') }}">Create</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <span class="has-icon">
                            <i class="fa-regular fa-share-from-square"></i>
                        </span>
                        <span class="nav-title">Socials</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('social.index') }}">Index</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <span class="has-icon">
                            <i class="fa-brands fa-jedi-order"></i>
                        </span>
                        <span class="nav-title">Orders</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('order.management') }}">Orders</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <span class="has-icon">
                            <i class="fa-regular fa-id-badge"></i>
                        </span>
                        <span class="nav-title">Contact</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('contact.index') }}">Contact Us</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('message.index') }}" class="has-arrow">
                        <span class="has-icon">
                            <i class="fa-solid fa-message"></i>
                        </span>
                        <span class="nav-title">Message</span>
                    </a>
                </li>
            </ul>
            <!-- END: side-nav-content -->
        </nav>
        <!-- END: .side-nav -->
    </div>
    <!-- END: .side-content -->
</aside>
