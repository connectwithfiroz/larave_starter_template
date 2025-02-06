<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VendorShop extends Model
{
    use HasFactory;
    use SoftDeletes;


    // Define the relationship with VendorShopImage
    public function shopImage()
    {
        return $this->hasMany(VendorShopImage::class, 'vendor_shop_id', 'id');
    }
    protected $guarded = ['id'];
    public function vendor()
    {
        return $this->hasOne(Vendor::class, 'id', 'vendor_id');
    }
    public function getQrImageAttribute($value)
    {
        if (empty($value)) {
            return asset('no-image.jpg'); // Default no-image path
        }

        // If the image URL starts with "http" or "https", return it as is.
        if (strpos($value, 'http') === 0) {
            return $value;
        }

        // Otherwise, assume it's a relative path and prepend it with the asset path.
        return asset('uploads/vendor_shops/' . $value);
    }
    // You can also define a relationship with Category if needed
    public function categories()
    {
        return $this->hasMany(Category::class, 'vendor_shop_id', 'id');
    }
    // Define the relationship to product (assuming a one-to-many relationship)
    public function products()
    {
        return $this->hasMany(Product::class, 'shop_id', 'id');
    }

}
