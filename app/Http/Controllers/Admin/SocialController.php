<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $social = Social::first();
        return view('admin.partials.social.create', compact('social'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Social::first();

        if ($data){
            $data->update([
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'tiktok' => $request->tiktok,
            ]);
            noty()->addSuccess('Successfully updated');

        }else{
            Social::create([
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'tiktok' => $request->tiktok,
            ]);
            noty()->addSuccess('Successfully created');
        }

        return redirect()->back();
    }


}
