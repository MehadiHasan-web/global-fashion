<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\Slider;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::latest()->get();
        $bast_selling = Product::latest()->limit(8)->get();
        $categories = Category::latest()->limit(5)->get();
        $subcategories = SubCategory::latest()->limit(8)->get();
        return view('frontend.partials.home.index', compact('sliders','bast_selling','categories','subcategories'));
    }
}