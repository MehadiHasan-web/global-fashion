<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Admin\Social;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{

    public function index($slug){
        $product = Product::where('slug', $slug)->firstOrFail();
        $product->visit()->withIp();
        $socials = Social::first();
        return view('frontend.partials.single-product.single', compact('product','socials'));
    }
}
