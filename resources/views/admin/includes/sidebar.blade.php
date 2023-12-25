<aside class="app-side" id="app-side">
    <!-- BEGIN .side-content -->
    <div class="side-content ">
        <!-- BEGIN .user-profile -->
        <div class="user-profile">
            <a href="index.html" class="logo">
                <img src="{{ asset('admin/img/logo.svg') }}" alt="Google Dashboards" />
            </a>
            <h6 class="location-name">San Francisco</h6>
            <ul class="profile-actions">
                <li>
                    <a href="#">
                        <i class="icon-social-skype"></i>
                        <span class="count-label yellow"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="count-label green"></span>
                        <i class="icon-drafts"></i>
                    </a>
                </li>
                <li>
                    <a href="login.html">
                        <i class="icon-export"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END .user-profile -->
        <!-- BEGIN .side-nav -->
        <nav class="side-nav">
            <!-- BEGIN: side-nav-content -->
            <ul class="unifyMenu" id="unifyMenu">
                <li class="active selected">
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <span class="has-icon">
                            <i class="icon-laptop_windows"></i>
                        </span>
                        <span class="nav-title">Dashboards</span>
                    </a>
                    <ul aria-expanded="false" class="collapse in">
                        <li>
                            <a href='{{ route('dashboard') }}' class="current-page">Dashboard</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="widgets.html">
                        <span class="has-icon">
                            <i class="icon-flash-outline"></i>
                        </span>
                        <span class="nav-title">Graph Widgets</span>
                    </a>
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
                        <li>
                            <a href="{{ route('product.create') }}">Create</a>
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
            </ul>
            <!-- END: side-nav-content -->
        </nav>
        <!-- END: .side-nav -->
    </div>
    <!-- END: .side-content -->
</aside>
