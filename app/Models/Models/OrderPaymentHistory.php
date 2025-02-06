<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPaymentHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'transaction_id',
        'total',
        'attachment',
        'payment_status',
        'reject_reason',
    ];

    public function getAttachmentAttribute($value)
    {
        if (empty($value)) {
            return asset('no-image.jpg'); // Default no-image path
        }

        // If the image URL starts with "http" or "https", return it as is.
        if (strpos($value, 'http') === 0) {
            return $value;
        }

        // Otherwise, assume it's a relative path and prepend it with the asset path.
        return asset('uploads/payment_screenshot/' . $value);
    }
}
