<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function shop()
    {
        //vendor-shop_id column in categories table
        return $this->belongsTo(VendorShop::class, 'vendor_shop_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function products(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    public function getImageAttribute($value)
    {
        if (empty($value)) {
            return asset('no-image.jpg'); // Default no-image path
        }

        // If the image URL starts with "http" or "https", return it as is.
        if (strpos($value, 'http') === 0) {
            return $value;
        }

        // Otherwise, assume it's a relative path and prepend it with the asset path.
        return asset('uploads/category/' . $value);
    }

    

}
