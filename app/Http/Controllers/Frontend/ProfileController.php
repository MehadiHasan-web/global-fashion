<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(){
        $user = auth()->user();
        $orders = DB::table('orders')->orderBy('created_at', 'DESC')->where('user_id', Auth::id())->limit(10)->get();
        $total_order = DB::table('orders')->where('user_id', Auth::id())->count();
        $order_done = DB::table('orders')->where('user_id', Auth::id())->where('status', 3)->count();
        $order_cancel = DB::table('orders')->where('user_id', Auth::id())->where('status', 5)->count();
        $pending_order = DB::table('orders')->where('user_id', Auth::id())->where('status', 0)->count();
        // dd($order_cancel);

        return view('frontend.partials.profile.profile', compact('user', 'orders','total_order','order_done','order_cancel', 'pending_order'));
    }
    public function updateProfile(Request $request){
        $user = User::find(auth()->user()->id);

        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'number' => 'nullable|max:13|min:11|unique:users,number,'.$user->id,
            'address' => 'nullable',

        ]);
        $user->update($request->all());
        noty()->addSuccess('User updated successfully');
        return redirect()->back();
    }
    public function changePassword(Request $request){
        $user = User::find(auth()->user()->id);

        $validation = $request->validate([
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'

        ]);
        $user->update([
            'password' => $request->password,
        ]);
        noty()->addSuccess('Password updated successfully');
        return redirect()->back();
    }
}
