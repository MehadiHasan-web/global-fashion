<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=> 'required|max:200',
            'description'=>'required|max:355',
            'slug' => 'required',
            'status' => 'nullable',
            'price' => 'required',
            'discounted_price' => 'nullable',
            'brand_name' => 'nullable',
            'category_id' => 'required',
            'subcategory_id' => 'nullable',
            'color' => 'required',
            'size' => 'required',
            'gender' => 'required',
            'is_featured' => 'nullable',
            'is_available' => 'nullable',
            'thumb_image' => 'required',
            'images' => 'required',
        ];
    }
}
