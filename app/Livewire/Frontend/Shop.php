<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Product;
use App\Models\Admin\Social;
use App\Models\Frontend\Cart;
use Livewire\Component;

class Shop extends Component
{

    public $search = '';

    public function render()
    {
        $product = $this->search
            ? Product::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(9)
            : Product::latest()->paginate(9);

        $social = Social::first();
        return view('livewire.frontend.shop', compact('product', 'social'));
    }

    public function addToCart($id){
        // dd($id);
        if(auth()->user()){
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $id,
            ];
            Cart::updateOrCreate($data);
            $this->dispatch('updateCartCount');
        }else{
            return redirect()->route('login');
        }
    }

}
