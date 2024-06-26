<?php

namespace App\Models\Admin;

use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements CanVisit
{
    use HasFactory;
    use HasVisits;

    protected $fillable = [
        'name','description','product_code','slug','price','discounted_price','brand_name','category_id','subcategory_id','gender','color','size','is_featured','is_available','thumb_image','images',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
