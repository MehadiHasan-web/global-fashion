<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Product;
use App\Models\Frontend\Cart;
use Livewire\Component;

class AddToCart extends Component
{
    public $product_id, $product, $color='', $qty=1, $size='';

    public function render()
    {
        $this->product = Product::where('id', $this->product_id)->firstOrFail();
        return view('livewire.frontend.add-to-cart');
    }

    public function addToCart(){
        // dd($id);
        if(auth()->user()){
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $this->product_id,
                'color' => $this->color,
                'size' => $this->size,
                'quantity' =>$this->qty,
            ];
            Cart::updateOrCreate($data);
            $this->dispatch('updateCartCount');
        }else{
            return redirect()->route('login');
        }
    }
}
