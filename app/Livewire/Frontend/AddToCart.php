<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Product;
use App\Models\Frontend\Cart;
use App\Models\Frontend\Wishlist;
use Illuminate\Http\Request;
use Livewire\Component;

class AddToCart extends Component
{
    public $product_id, $product, $color='', $qty=1, $size;

    public function render()
    {
        $this->product = Product::where('id', $this->product_id)->firstOrFail();
        return view('livewire.frontend.add-to-cart');
    }

    public function addToCart(){
        $data = [
            'product_id' => $this->product_id,
            'color' => $this->color,
            'size' => $this->size,
            'quantity' =>$this->qty,
        ];
        if (!session()->has('session_id')) {
            $session_id = mt_rand(100000, 999999);
            session(['session_id' => $session_id]);
        } else {
            $session_id = session('session_id');
        }
        if(auth()->user()){
           $data['user_id'] = auth()->user()->id;
        }else{
            $data['session_id'] = $session_id;
        }
        Cart::updateOrCreate($data);
        $this->dispatch('updateCartCount');
        return redirect()->route('order.index');
    }
        // wishlist
        public function addToWishlist($id){
            if(auth()->user()){
                $data = [
                    'user_id' => auth()->user()->id,
                    'product_id' => $id,
                ];
                Wishlist::updateOrCreate($data);
                noty()->theme('metroui')->addSuccess('Wishlist added successfully');
            }else{
                return redirect()->route('login');
            }
        }
}
