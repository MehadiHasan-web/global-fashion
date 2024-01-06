<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('frontend.partials.profile.profile', compact('user'));
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
