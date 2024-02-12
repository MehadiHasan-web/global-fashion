<?php

namespace App\Livewire\Frontend;

use App\Models\Frontend\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PlaceOrder extends Component
{
    public $total;
    public $subtotal = 0;
    public $vat;
    public $products;

    public function mount(){
        if (Auth::check()) {
            $this->products = Cart::with('product')->where('user_id', auth()->user()->id)->get();
        } else {
            $session_id = session('session_id');
            if ($session_id) {
                $this->products = Cart::with('product')->where('session_id', $session_id)->get();
            } else {
                return redirect()->route('login')->with('message', 'Please log in to view your orders.');
            }
        }

        foreach ($this->products as $item) {
            $price = $item->product->discounted_price ?? $item->product->price;
            $this->total = (float)$this->total + $price * $item->quantity;
        }

    }

    public function render()
    {
        return view('livewire.frontend.place-order');
    }

    public function Vat()
    {
        $this->subtotal =$this->total + $this->vat;
    }




}
