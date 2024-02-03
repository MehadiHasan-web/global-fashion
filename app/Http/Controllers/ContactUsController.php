<?php

namespace App\Http\Controllers;

use App\Models\Admin\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        $contacts = ContactUs::first();
        return view('admin.partials.contactUs.index',compact('contacts'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'number' => 'nullable',
            'another_number' => 'nullable',
            'email' => 'nullable',
            'another_email' => 'nullable',
            'address' => 'nullable',
            'location' => 'nullable',
        ]);

        $data = ContactUs::firstOrNew();

        $data->fill([
            'number' => $request->number,
            'another_number' => $request->another_number,
            'email' => $request->email,
            'another_email' => $request->another_email,
            'address' => $request->address,
            'embed_code' => $request->location,
        ])->save();

        flash()->addSuccess('Updated Successfully');
        return redirect()->back();
    }

}
