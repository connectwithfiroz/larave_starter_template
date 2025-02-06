<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationDetail extends Model
{
    use HasFactory;
    protected $fillable = ['latitude', 'longitude', 'response'];
    
    protected $casts = [
        'response' => 'array', // Automatically cast JSON response to an array
    ];
}
