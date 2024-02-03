<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Frontend\Cart;
use App\Models\Frontend\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

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

    // add to card
    public function addToCart($id){
        if (!session()->has('session_id')) {
            $session_id = mt_rand(100000, 999999);
            session(['session_id' => $session_id]);
        } else {
            $session_id = session('session_id');
        }

            $data = [
                'product_id' => $id,
                'session_id' => $session_id,
            ];
            if(Auth::check()){
                $data['user_id'] = auth()->user()->id;
            }
            Cart::updateOrCreate($data);
            $this->dispatch('updateCartCount');
            noty()
            ->theme('metroui')
            ->addSuccess('Cart added successfully');
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
