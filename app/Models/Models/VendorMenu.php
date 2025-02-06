<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorMenu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function shop()
    {
        return $this->hasOne(Shop::class, 'id', 'shop_id');
    }
}
