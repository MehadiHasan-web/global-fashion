<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description','slug','price','discounted_price','brand_name','category_id','subcategory_id','gender','color','size','is_featured','is_available','thumb_image','images',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
