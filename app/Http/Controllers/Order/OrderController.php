<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Frontend\Cart;
use App\Models\Order\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Order::where('user_id', auth()->user()->id)->first();
        $total='';
        $products = Cart::with('product')->where('user_id', auth()->user()->id)->get();
        foreach ($products as $item) {
            $price = $item->product->discounted_price ?? $item->product->price;
            $total = (float)$total + $price * $item->quantity;
        }

        return view('frontend.partials.order.checkout', compact('user','total','products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $total='';
        $products = Cart::with('product')->where('user_id', auth()->user()->id)->get();
        foreach ($products as $item) {
            $price = $item->product->discounted_price ?? $item->product->price;
            $total = (float)$total + $price * $item->quantity;
        }

       $data = [
        'user_id' => Auth::id(),
        'fname' => $request->fname,
        'lname' => $request->lname,
        'address' => $request->address,
        'city' => $request->city,
        'thana' => $request->thana,
        'zip' => $request->zip,
        'number' => $request->number,
        'email' => $request->email,
        'country' => 'Bangladesh',
        'additional_info' => $request->additional_info,
        'total' => $total,
        'order_id' => rand(10000, 900000),
        'status' => 0,
        'date' => date('d-m-Y'),
        'month' => date('F'),
        'year' => date('Y'),
       ];

       $order_id = DB::table('orders')->insertGetId($data);

    // order details
        $details = array();
        foreach($products as $item){
            $details['order_id'] = $order_id;
            $details['product_id'] = $item->product_id;
            $details['product_name'] = $item->product->name;
            $details['color'] = $item->color;
            $details['size'] = $item->size;
            $details['quantity'] = $item->quantity;
            $details['price'] =  ($item->product->discounted_price ?? $item->product->price)*$item->quantity;

            DB::table('order_details')->insert($details);
            $item->delete();
        }
        noty()->addSuccess('Order Success');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
