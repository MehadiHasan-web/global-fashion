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

        if (Auth::check()) {
            $user = Order::where('user_id', auth()->user()->id)->first();
        } else {
            $session_id = session('session_id');
            if ($session_id) {
                $user = Order::where('session_id', $session_id)->first();
            } else {
                return redirect()->route('login')->with('message', 'Please log in to view your orders.');
            }
        }

        return view('frontend.partials.order.checkout', compact('user'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'fname' => 'required',
            'lname' => 'nullable',
            'address' => 'required',
            'city' => 'required',
            'thana' => 'nullable',
            'zip' => 'nullable',
            'number' => 'required',
            'additional_info' => 'nullable',

        ]);
        // dd($request->all());
        // $total='';
        if(Auth::check()){
            $products = Cart::with('product')->where('user_id', auth()->user()->id)->get();
        }else{
            $products = Cart::with('product')->where('session_id', session('session_id'))->get();
        }
        // foreach ($products as $item) {
        //     $price = $item->product->discounted_price ?? $item->product->price;
        //     $total = (float)$total + $price * $item->quantity;
        // }

       $data = [
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
        'total' => $request->subtotal,
        'order_id' => rand(10000, 900000),
        'status' => 0,
        'date' => date('d-m-Y'),
        'month' => date('F'),
        'year' => date('Y'),
       ];
       if(Auth::check()){
        $data['user_id'] =   Auth::id();
       }else{
        $data['session_id'] = session('session_id');
       }

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

}
