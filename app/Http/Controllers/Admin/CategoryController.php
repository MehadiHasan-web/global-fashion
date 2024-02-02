<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(25);
        return view('admin.partials.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partials.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $slug = Str::slug($request->name, '-');
        $data = [
            'name' => $request->name,
            'discount' => $request->discount,
            'slug' => $slug,
            'description' => $request->description,
        ];
        $image = $request->file('image');
        if ($image) {
            $reviewDirectory = public_path('storage/categories');
            File::makeDirectory($reviewDirectory, 0755, true, true);

            $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $uniqueName = $originalName.'_'.Str::random(20) . '_' . uniqid() . '.' . '.webp';
            Image::make($image)->resize(1280, 1280)->save('storage/categories/' . $uniqueName, 90, 'webp');

            $data['image'] = $uniqueName;
        }

        Category::create($data);
        noty()->addInfo( 'Category created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.partials.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.partials.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validation = $request->validate([
            'name' => 'required|max:150|unique:categories,name,'.$category->id,
            'description' => 'nullable|max:200',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'discount' => 'nullable',
        ]);

        $slug = Str::slug($request->name, '-');
        $data = [
            'name' => $request->name,
            'discount' => $request->discount,
            'slug' => $slug,
            'description' => $request->description,
        ];

        $image = $request->file('image');
        if ($image) {
            $reviewDirectory = public_path('storage/categories');
            File::makeDirectory($reviewDirectory, 0755, true, true);
            $filePath = public_path('storage/categories/' . $category->image);
            if($filePath){
                 unlink($filePath);
            }
            $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $uniqueName = $originalName.'_'.Str::random(20) . '_' . uniqid() . '.' . '.webp';
            Image::make($image)->resize(1280, 1280)->save('storage/categories/' . $uniqueName, 90, 'webp');

            $data['image'] = $uniqueName;
        }
        $category->update($data);
        noty()->addInfo( 'Category updated successfully');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $filePath = public_path('storage/categories/' . $category->image);
        if($filePath){
             unlink($filePath);
        }
        $category->delete();
        response('Deleted Successfully');
    }

}
