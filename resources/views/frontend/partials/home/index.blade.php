@extends('frontend.master.master')
@section('title')
    Global Fashion
@endsection
@section('content')
    @include('frontend.partials.slider')

    <div class="container my-2">
        <h3>Top Categories</h3>
        {{-- swiper category  --}}
        <div class="swiper mySwiper">
            <div class="swiper-wrapper py-4">
                @isset($top_category)
                    @foreach ($top_category as $item)
                        <div class="swiper-slide ">
                            <div class=" p-1 mb-2 ">
                                <a href="{{ route('categoryProducts', $item->slug) }}">
                                    <div class=" p-1 ">
                                        <div class="w-100% h-60%">
                                            <img class="p-1 " src="{{ URL::to('storage/categories/' . $item->image) }}"
                                                alt="Card image cap">
                                        </div>
                                        <h4 class="card-title m-0 text-center mt-1">{{ $item->name ?? '' }}</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endisset

                {{-- <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                </div> --}}
            </div>
            <div class="swiper-pagination"></div>
        </div>
        {{-- swiper category  end --}}

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
                pagination: false,
                autoplay: true
            });
        </script>

    </div>

    <div class="product-area pb-60">
        <div class="container">
            @include('frontend.partials.home.product')
        </div>
    </div>
@endsection
