<div>
    <form wire:submit="addToCart">
        <div class="pro-details-size-color">
            <div class="pro-details-color-wrap mt-3 ">
                <span>Color</span>
                <div class="radio-group">
                    @isset($product->color)
                        @foreach (json_decode($product->color) as $item)
                            <div class='colors text-center px-2' data-value="{{ $item ?? '' }}">
                                {{ $item ?? '' }}</div>
                        @endforeach
                    @endisset
                    <div class="form-group">
                        <input wire:model="color" type="text" class="form-control" id="radio-value" hidden />
                    </div>
                </div>
            </div>
            <div class="pro-details-color-wrap mt-3">
                <span>Size</span>
                <div class="radio-group">
                    @isset($product->size)
                        @foreach (json_decode($product->size) as $item)
                            <div class='colors text-center px-3' data-value="{{ $item ?? '' }}">
                                {{ $item ?? '' }}</div>
                        @endforeach
                    @endisset
                    <div class="form-group">
                        <input wire:model="size" type="text" class="form-control" id="radio-value" hidden />
                    </div>
                </div>
            </div>
        </div>

        <div class="pro-details-quality mt-2">
            <div class="cart-plus-minus">
                <input class="cart-plus-minus-box" type="text" wire:model="qty" value="1" max="100"
                    min="1">
            </div>
            <div class="pro-details-cart btn-hover">
                <button type="submit">Add To Cart</button>
                {{-- <button>Add To Cart</button> --}}
            </div>
            <div class="pro-details-wishlist">
                <a href="#"><i class="fa fa-heart-o"></i></a>
            </div>
            <div class="pro-details-compare" style="margin-left: 20px; font-size:18px;">
                <i class="fa-solid fa-shuffle "></i></a>
            </div>
        </div>
    </form>
</div>
