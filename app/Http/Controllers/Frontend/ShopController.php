<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $categories = Category::latest()->limit(5)->get();
        $subcategories = SubCategory::latest()->limit(8)->get();
        return view('frontend.partials.shop.shop', compact('categories', 'subcategories'));
    }
    public function viewCart(){
        $categories = Category::latest()->limit(5)->get();
        $subcategories = SubCategory::latest()->limit(8)->get();
        return view('frontend.partials.card.view-card');
    }
}
