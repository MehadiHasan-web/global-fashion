<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\Social;
use App\Models\Admin\Tag;
use App\Models\Frontend\Cart;
use App\Models\Frontend\Wishlist;
use Livewire\Component;

class Shop extends Component
{

    public $search = '';
    public $price;




    public function render()
    {

        $productQuery = Product::query();

        if ($this->search) {
            $productQuery->where('name', 'like', '%' . $this->search . '%');
        }
        $productQuery->whereBetween('price', [0, $this->price ?? 50000])->latest()->orWhereBetween('discounted_price', [0, $this->price ?? 50000]);
        $product = $productQuery->paginate(9);


        $social = Social::first();
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();

        return view('livewire.frontend.shop' , compact('product', 'categories', 'tags'));
    }

    // add to card
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
