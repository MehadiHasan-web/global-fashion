<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\ContactUs;
use App\Models\Admin\Product;
use App\Models\Admin\Slider;
use App\Models\Admin\Social;
use App\Models\Admin\SubCategory;
use App\Models\Frontend\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::latest()->get();
        $top_category = Category::where('top_category', true)->get();
        $categories = Category::all();
        $popular_products = Product::popularThisWeek()->latest()->paginate(30);
        // dd($popular_products);

        return view('frontend.partials.home.index', compact('sliders', 'top_category','popular_products','categories'));
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
        return view('frontend.partials.home.category-product', compact('categoryProducts'));
    }

    // add to cart
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
            noty()
            ->theme('metroui')
            ->addSuccess('Cart added successfully');
            return redirect()->route('order.index');

    }
    public function contactUs(){
        $contact = ContactUs::first();
        $social = Social::first();
       return view('frontend.partials.contactus.contactus', compact('contact', 'social'));
    }
    public function search(Request $request){
        $searchTerm = $request->search;
    //    $searchResults =  Product::where('name', 'like', '%' . $searchTerm . '%')->get();
    //    dd($searchResults);
    $searchResults = Product::where('name', 'like', '%' . $searchTerm . '%')
    ->orWhereHas('tag', function ($query) use ($searchTerm) {
        $query->where('name', 'like', '%' . $searchTerm . '%');
    }) ->get();

       return view('frontend.partials.searchResult', compact('searchResults'));
    }

}
