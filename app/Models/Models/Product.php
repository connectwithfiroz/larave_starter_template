<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['single_image'];
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function vendor()
    {
        return $this->hasOne(Vendor::class, 'id', 'vendor_id');
    }
    public function variants2()
    {
        return $this->hasMany(ProductVariant::class, 'product_id', 'id');
    }

    public function getSingleImageAttribute()
    {
        $images = json_decode($this->image_json, true);
        if (empty($images)) {
            return asset('no-image.jpg');
        } else {
            return asset('uploads/product_image/' . $images[0]['name']);
        }
    }
}
