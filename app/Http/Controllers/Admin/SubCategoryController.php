<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubCategoryRequest;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = SubCategory::latest()->paginate(25);
        return view('admin.partials.sub-category.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.partials.sub-category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryRequest $request)
    {
        $slug = Str::slug($request->name, '-');
        $data = [
            'name' => $request->name,
            'slug' => $slug,
            'cat_id' => $request->cat_id,
            'description' => $request->description,
        ];
        // dd($data);
        SubCategory::create($data);
        noty()->addInfo( 'Subcategory created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        return view('admin.partials.sub-category.show', compact('subCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $categories = Category::all();
        return view('admin.partials.sub-category.edit', compact('subCategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategoryRequest $request, SubCategory $subCategory)
    {
        $slug = Str::slug($request->name, '-');
        $data = [
            'name' => $request->name,
            'slug' => $slug,
            'cat_id' => $request->cat_id,
            'description' => $request->description,
        ];
        // dd($data);
        $subCategory->update($data);
        noty()->addInfo( 'Subcategory Updated successfully');
        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $subcategory->delete();
        response('Deleted Successfully');
    }
}
