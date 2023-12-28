<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'description'=>'required',
            // 'slug' => 'required|min:3|max:255|unique:products,slug,'.$this->id,
            'price' => 'required',
            'discounted_price' => 'nullable',
            'brand_name' => 'nullable',
            'category_id' => 'required',
            'subcategory_id' => 'nullable',
            'color' => 'required',
            'size' => 'required',
            'gender' => 'required',
        ];
    }
}
