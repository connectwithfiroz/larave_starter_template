<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class Vendor extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['status'];
    public function categories()
    {
        return $this->hasMany(Category::class, 'vendor_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'vendor_id', 'id');
    }
    public function shops()
    {
        return $this->hasMany(VendorShop::class, 'vendor_id', 'id');
    }
    public function getImgAttribute($value)
    {
        if (empty($value)) {
            return asset('no-image.jpg'); // Default no-image path
        }

        // If the image URL starts with "http" or "https", return it as is.
        if (strpos($value, 'http') === 0) {
            return $value;
        }

        // Otherwise, assume it's a relative path and prepend it with the asset path.
        return asset('uploads/vendor/' . $value);
    }
}
