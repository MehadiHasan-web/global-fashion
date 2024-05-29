<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Admin\Social;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{

    public function index($slug, $product_code){
        // dd($product_code);
        $product = Product::where('slug', $slug)->where('product_code', $product_code)->firstOrFail();
        $product->visit()->withIp();
        $socials = Social::first();
        return view('frontend.partials.single-product.single', compact('product','socials'));
    }
}
