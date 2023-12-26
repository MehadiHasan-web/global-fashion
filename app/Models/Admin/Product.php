<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    protected $fillable = [
        'name','description','slug','status','price','discounted_price','brand_name','category_id','subcategory_id','gender','color','size','is_featured','is_available'
    ];
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
