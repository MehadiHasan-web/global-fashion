<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Models\Admin\Category;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        $categories = Category::all();
        return view('admin.partials.slider.index', compact('sliders', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.partials.slider.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ];

        $image = $request->file('image');
        if ($image) {
            $reviewDirectory = public_path('storage/slider');
            File::makeDirectory($reviewDirectory, 0755, true, true);

            $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $uniqueName = $originalName.'_'.Str::random(20) . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(740, 724)->save('storage/slider/' . $uniqueName);

            $data['image'] = $uniqueName;
        }

        Slider::create($data);
        flash()->addSuccess('Slider created successfully');
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        $categories = Category::all();
        return view('admin.partials.slider.show', compact('slider','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        $categories = Category::all();
        return view('admin.partials.slider.edit', compact('slider','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $validation = $request->validate([
            'title' => 'nullable|max:55',
            'description' => 'nullable|max:200',
            'category_id' => 'nullable',
            'image' => 'nullable|max:10240'
        ]);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ];
        $image = $request->file('image');
        $filePath = public_path('storage/slider/' . $slider->image);

        if ($image) {
            if($filePath){
                unlink($filePath);
            }
            $reviewDirectory = public_path('storage/slider');
            File::makeDirectory($reviewDirectory, 0755, true, true);

            $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $uniqueName = $originalName.'_'.Str::random(20) . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(740, 724)->save('storage/slider/' . $uniqueName);

            $data['image'] = $uniqueName;
        }
        $slider->update($data);
        return redirect()->route('slider.index')->with('success', 'Slider update successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $image = $slider->image;
        $filePath = public_path('storage/slider/' . $slider->image);
        if($filePath){
            unlink($filePath);
        }
        $slider->delete();

        return response('Success');
    }
}
