<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function index()  {
        $total=0; $pending_income=0;
        $total_products = Product::count();
        $new_order = DB::table('orders')->where('status', 0)->count();
        $cancel_order = DB::table('orders')->where('status', 5)->count();
        $complete_order = DB::table('orders')->where('status', 4)->count();
        // Overall Income
        $Overall_Income_product = DB::table('orders')->where('status', 3)->get();
        foreach ($Overall_Income_product as $item){
            $total += (float) $item->total;
        }
        $pending_Income_product = DB::table('orders')->where('status', 1)->get();
        foreach ($pending_Income_product as $item){
            $pending_income += (float) $item->total;
        }
        // dd($total);
        return view('admin.partials.dashboard', compact('total_products', 'new_order','complete_order','cancel_order', 'total','pending_income'));

    }
}
