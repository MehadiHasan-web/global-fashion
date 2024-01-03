<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Product;
use App\Models\Frontend\Cart;
use Livewire\Component;

class HomeProduct extends Component
{
    public $bast_selling;
    public function render()
    {
        $this->bast_selling = Product::latest()->limit(8)->get();
        return view('livewire.frontend.home-product');
    }

    public function addToCart($id){
        if(auth()->user()){
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $id,
            ];
            Cart::updateOrCreate($data);
            $this->dispatch('updateCartCount');
            noty()
            ->theme('metroui')
            ->addSuccess('Cart added successfully');
        }else{
            return route('login');
        }
    }
}
