<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\SubCategory;
use App\Models\Admin\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.partials.product.index');
    }

    public function getSubcategories(Request $request, $category)
    {
        $subcategories = SubCategory::where('cat_id', $category)->get();
        return response()->json(['subcategories' => $subcategories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $tags = Tag::latest()->get();
        return view('admin.partials.product.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $color = json_encode($request->input('color', []));
        $size = json_encode($request->input('size', []));
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'discounted_price' => $request->discounted_price,
            'brand_name' => $request->brand_name,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'gender' => $request->gender,
            'color' => $color,
            'size' => $size,
        ];
        $data['slug'] = Str::slug($request->name, '-');

        // thumb_image
        $image = $request->file('thumb_image');
        if ($image) {
            $reviewDirectory = public_path('storage/product_thumbnail');
            File::makeDirectory($reviewDirectory, 0755, true, true);

            $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $uniqueName = $originalName.'_'.Str::random(20) . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(570, 680)->save('storage/product_thumbnail/' . $uniqueName);

            $data['thumb_image'] = $uniqueName;
        }
        // more image
        $images = [];
        if($request->hasFile('images')){
            foreach ($request->file('images') as $key => $image) {
                $reviewDirectory = public_path('storage/product_image');
                File::makeDirectory($reviewDirectory, 0755, true, true);

                $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $uniqueName = $originalName.'_'.Str::random(20) . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(570, 680)->save('storage/product_image/' . $uniqueName);

                $data['images'] = json_encode($images);
            }
        }



        $product = Product::create($data);
        $tag = $request->input('tag_id', []);
        $product->tag()->attach($tag);
        flash()->addSuccess('Product created successfully');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
