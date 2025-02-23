<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'gender',
        'aadhar',
        'category',
        'dob',
        'district',
        'state',
        'pincode',
        'project_name',
        'registration_date',
        'address',
        'message',
        'amount',
        'razorpay_payment_id',
        'razorpay_order_id',
        'razorpay_signature',
    ];
}
