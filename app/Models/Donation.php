<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    // Define fillable fields
    
    protected $fillable = [
        'donation_for',
        'message',
        'name',
        'email',
        'mobile_number',
        'amount',
        'razorpay_payment_id',
        'razorpay_order_id',
        'razorpay_signature',
        'status',
        'address',
        'pan_no',
        'bank_name',
        'branch_name',
        'donation_id',
    ];
}
