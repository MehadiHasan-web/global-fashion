<div class="slider-area">
    <div class="slider-active owl-carousel nav-style-1 owl-dot-none">
        @isset($sliders)
            @foreach ($sliders as $item)
                <div class="single-slider slider-height-1 bg-purple">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                                <div class="slider-content slider-animated-1">
                                    <h3 class="animated">{{ $item->title ?? '' }}</h3>
                                    <h1 class="animated">{{ $item->description ?? '' }}</h1>
                                    <div class="slider-btn btn-hover">
                                        <a class="animated" href="{{ route('shop') }}">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                                <div class="slider-single-img slider-animated-1">
                                    @isset($categories)
                                        @foreach ($categories as $category)
                                            @if ($category->id == $item->category_id)
                                                <a href="{{ route('categoryProducts', $category->slug) }}">
                                                    <img class="animated" src="{{ URL::to('storage/slider/' . $item->image) }}"
                                                        alt="">
                                                </a>
                                            @endif
                                        @endforeach
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endisset

    </div>
</div>
