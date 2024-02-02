<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','discount', 'slug', 'description','top_category'];

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'cat_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
