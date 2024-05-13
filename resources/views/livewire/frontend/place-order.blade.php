<div class="your-order-area">
    <h3>Your order</h3>
    <div class="your-order-wrap gray-bg-4">
        <div class="your-order-product-info">
            <div class="your-order-top">
                <ul>
                    <li>Product</li>
                    <li>Total</li>
                </ul>
            </div>
            <div class="your-order-middle">
                <ul>
                    @isset($products)
                        @foreach ($products as $item)
                            <li><span class="order-middle-left">{{ $item->product->name }}</span> <span class="order-price">
                                    @if ($item->product->discounted_price)
                                        <span class="fw-bold"> ট </span>
                                        {{ $item->product->discounted_price * $item->quantity }}.00
                                    @else
                                        <span class="fw-bold"> ট
                                        </span>{{ $item->product->price * $item->quantity }}.00
                                    @endif
                                </span></li>
                        @endforeach
                    @endisset
                </ul>
            </div>
            <div class="form-group col-12 p-0 pr-1">
                <div class="input-group border py-2">
                    <select name="vat" class="custom-select" wire:model="vat" wire:change="Vat" required>
                        <option selected value="0">আপনার লোকেশন সিলেক্ট করুন</option>
                        <option value="130">ঢাকার বাহিরে (130 Tk)</option>
                        <option value="100">ঢাকার আশেপাশে (Savar,Narayangajj) (100 Tk)</option>
                        <option value="65">ঢাকার ভিতরে (65 Tk)</option>
                    </select>
                </div>
            </div>
            <div class="your-order-total">
                <ul>
                    <li class="order-total">Total</li>
                    <li>৳{{ $subtotal == 0 ? $total : $subtotal }}</li>
                </ul>
                <input hidden type="number" name="subtotal" value="{{ $subtotal == 0 ? $total : $subtotal }}">
            </div>
        </div>
        <div class="payment-method">
            <div class="payment-accordion element-mrg">
                <div class="panel-group" id="accordion">
                    <div class="panel payment-accordion">
                        <div class="panel-heading" id="method-three">
                            <h4 class="panel-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#method3">
                                    Cash on delivery
                                </a>
                            </h4>
                        </div>
                        <div id="method3" class="panel-collapse collapse" data-bs-parent="#accordion">
                            <div class="panel-body">
                                <p>Please send a check to Store Name, Store Street, Store Town, Store
                                    State / County, Store Postcode.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="w-100 bg-white  mt-25 border-0" type="submit">
        <div class="Place-order ">
            <a class="btn-hover">Place Order</a>
        </div>
    </button>
    <form method="get" action="{{ route('bkash-create-payment') }}">
        @method('GET')
        <button type="submit">Bkash</button>
    </form>

</div>
