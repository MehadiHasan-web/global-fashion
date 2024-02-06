<?php

namespace App\Livewire\Frontend;

use App\Models\Frontend\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CountCard extends Component
{
    public $cartItems,$cardProduct=0, $total=0;
    protected $listeners = ['updateCartCount' => 'getCartItem'];

    public function render()
    {
        $this->getCartItem();
        if(Auth::check()){
            $this->cartItems = Cart::with('product')->where('user_id', auth()->user()->id)->latest()->get();
        }else{
            $this->cartItems = Cart::with('product')->where('session_id', session('session_id'))->get();
        }

        if($this->cartItems){
            foreach ($this->cartItems as $item){
                $price = $item->product->discounted_price ?? $item->product->price;
                $this->total += $price * $item->quantity;
            }
        }

        return view('livewire.frontend.count-card');
    }
    public function getCartItem(){
        if(Auth::check()){
            $this->cardProduct = Cart::whereUserId(auth()->user()->id)->count();
        }else{
            $this->cardProduct = Cart::where('session_id', session('session_id'))->count();
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
