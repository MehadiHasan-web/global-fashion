<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use App\Models\Frontend\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ViewCard extends Component
{
    public $cartItems, $total;

    public function mount()
    {
        $this->loadCart();
    }

    public function loadCart()
    {
        // $this->cartItems = Session::get('cart', []);
        // $this->calculateTotal();
        if (Auth::check()) {
            $this->cartItems = Cart::with('product')->where('user_id', auth()->user()->id)->get();
            $this->calculateTotal();
        }else{
            $this->cartItems = Cart::with('product')->where('session_id', session('session_id'))->get();
            $this->calculateTotal();
        }
    }

    public function incrementQuantity($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->quantity += 1;
            $cart->save();
            $this->loadCart();
        }
    }
    protected function calculateTotal()
    {
        $this->total = 0;
        foreach ($this->cartItems as $item) {
            $price = $item->product->discounted_price ?? $item->product->price;
            $this->total += $price * $item->quantity;
        }

    }

    public function decrementQuantity($id){
        $cart = Cart::whereId($id)->first();
        if ($cart->quantity > 1) {
            $cart->quantity -= 1;
            $cart->save();
            $this->loadCart();
        } else {
            noty()->theme('mint')->addError('minimum quantity is 1');
        }
    }

    public function removeItem($id){
        $cart = Cart::whereId($id)->first();
        if($cart){
            $cart->delete();
            $this->loadCart();
            $this->dispatch('updateCartCount');
        }
    }
    public function clearCart(){
        if(Auth::check()){
            $userId = auth()->user()->id;
            $cartProduct = Cart::where('user_id', $userId)->get();
            foreach ($cartProduct as $item){
                $item->delete();
            }
            $this->dispatch('updateCartCount');
            $this->loadCart();
        }else{
            noty()->addSuccess('Firstly you have to add to cart');
        }
    }

    public function render()
    {
        return view('livewire.frontend.view-card');
    }
}
