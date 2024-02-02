<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\Slider;
use App\Models\Admin\Social;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::latest()->get();
        $top_category = Category::where('top_category', true)->get();
        return view('frontend.partials.home.index', compact('sliders', 'top_category'));
    }
    public function wishlist(){
        return view('frontend.partials.wishlist');
    }
    public function quickView($id){
        $product = Product::find($id);
        $socials = Social::first();
        return view('frontend.partials.quick-view', compact('product', 'socials'));
    }
    public function categoryProducts($slug){
        $categoryProducts = Category::with('products')->where('slug', $slug)->first();
        // dd($categoryProducts->products);
        return view('frontend.partials.home.category-product', compact('categoryProducts'));
    }
}
