<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderManagementController extends Controller
{
    public function index() {
        return view('admin.partials.order.new-order');
    }
    public function history() {
        $orders = DB::table('orders')->where('status', 3)->get();
        return view('admin.partials.order.order-history', compact('orders'));
    }
    public function receivedOrder(){
        return view('admin.partials.order.order-received');
    }
    public function orderDetails($id){
        $order = DB::table('orders')->where('id',$id)->first();
        $orderDetails = DB::table('order_details')->where('order_id', $id)->get();

        return view('admin.partials.order.order-details', compact('order','orderDetails'));
    }

}
