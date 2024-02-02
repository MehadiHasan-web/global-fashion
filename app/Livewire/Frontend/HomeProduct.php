<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Frontend\Cart;
use App\Models\Frontend\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeProduct extends Component
{
    // public $bast_selling;
    public $categories;
    public function render()
    {
        // $this->bast_selling = Product::latest()->limit(16)->get();
        $this->categories = Category::with('products')->get();
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
            return redirect()->route('login');
        }
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
