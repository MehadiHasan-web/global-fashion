<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Product;
use App\Models\Frontend\Cart;
use App\Models\Frontend\Wishlist as FrontendWishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Wishlist extends Component
{
    public $wishlists;
    public function render()
    {
        if(Auth::check()){
            $this->wishlists = FrontendWishlist::with('product')->where('user_id', auth()->user()->id)->get();
        }

        return view('livewire.frontend.wishlist');
    }
    public function incrementQuantity($id){
        $cart = FrontendWishlist::whereId($id)->first();
        $cart->quantity += 1;
        $cart->save();
    }
    public function decrementQuantity($id){
        $cart = FrontendWishlist::whereId($id)->first();
        if ($cart->quantity > 1) {
            $cart->quantity -= 1;
            $cart->save();
        } else {
            noty()
            ->theme('mint')
            ->addError('minimum quantity is 1');
        }
    }

    public function addToCart($id){
        $wishlist = FrontendWishlist::with('product')->where('user_id', auth()->user()->id)->where('product_id', $id)->first();
        if(auth()->user()){
            $data = [
                'user_id' => auth()->user()->id,
                'quantity' => $wishlist->quantity,
                'product_id' => $id,
            ];
            Cart::updateOrCreate($data);
            $this->dispatch('updateCartCount');
            noty()->theme('metroui') ->addSuccess('Cart added successfully');

            $wishlist->delete();

        }else{
            return redirect()->route('login');
        }
    }
}
