<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use App\Models\Frontend\Cart;
use Livewire\Component;

class ViewCard extends Component
{
    public $cartItems, $total=0;

    public function render()
    {
        $this->cartItems = Cart::with('product')->where('user_id', auth()->user()->id)->get();

        foreach ($this->cartItems as $item){
            $price = $item->product->discounted_price ?? $item->product->price;
            $this->total += $price * $item->quantity;
        }

        return view('livewire.frontend.view-card');
    }
    public function incrementQuantity($id){
        $cart = Cart::whereId($id)->first();
        $cart->quantity += 1;
        $cart->save();
    }
    public function decrementQuantity($id){
        $cart = Cart::whereId($id)->first();
        if ($cart->quantity > 1) {
            $cart->quantity -= 1;
            $cart->save();
        } else {
            noty()
            ->theme('mint')
            ->addError('minimum quantity is 1');
        }
    }
    public function removeItem($id){
        $cart = Cart::whereId($id)->first();
        if($cart){
            $cart->delete();
            $this->dispatch('updateCartCount');
        }
    }
}
