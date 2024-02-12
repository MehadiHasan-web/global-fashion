<div>
    <form wire:submit="addToCart">
        <div class="pro-details-size-color">
            <div class="pro-details-color-wrap mt-3 ">
                <span>Color</span>
                <div class="radio-group">
                    @isset($product->color)
                        @foreach (json_decode($product->color) as $item)
                            <div class="form-check form-check-inline" style="margin-left: 5px;">
                                <input class="form-check-input" type="radio" wire:model="color" id="{{ $item ?? '' }}"
                                    value="{{ $item ?? '' }}">
                                <label class="form-check-label" for="{{ $item ?? '' }}"> {{ $item ?? '' }}</label>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
            <div class="pro-details-color-wrap mt-3">
                <span>Size</span>
                <div class="radio-group ">
                    @isset($product->size)
                        @foreach (json_decode($product->size) as $item)
                            <div class="form-check form-check-inline" style="margin-left: 5px;">
                                <input class="form-check-input" type="radio" wire:model="size" id="{{ $item ?? '' }}"
                                    value="{{ $item ?? '' }}">
                                <label class="form-check-label" for="{{ $item ?? '' }}"> {{ $item ?? '' }}</label>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>

        <div class="pro-details-quality mt-2">
            <div class="pro-details-cart btn-hover">
                <button class="p-0 border-0"><a>অর্ডার করুন</a></button>
                {{-- <button>Add To Cart</button> --}}
            </div>
            <div class="pro-details-wishlist">
                <a href="#" wire:click.prevent="addToWishlist({{ $product->id }})"><i
                        class="fa fa-heart-o"></i></a>
            </div>
            <div class="pro-details-compare" style="margin-left: 20px; font-size:18px;">
                <i class="fa-solid fa-shuffle "></i></a>
            </div>
        </div>
        <div>
            <a href="tel:09610000383" class="btn btn-danger btn-block w-100 border-0 p-2 mb-2"
                style="color: #fff; background-color: #002e45;"><i class="fa-solid fa-phone mr-2"></i>কল করতে ক্লিক করুন
                :
                09610000383</a>
            <a href="https://wa.me/+8801810024507" class="btn btn-primary btn-block w-100 border-0 p-2 mb-2"><i
                    class="fab fa-whatsapp"></i> Whatsapp Message : +8801810024507</a>
        </div>
    </form>
</div>
