<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderList;
class Order extends Model
{
    use HasFactory;
	// protected $fillable = ['razorpay_orderid', 'status','REFUNDAMOUNT', 'refund_status'];
	protected $guraded = ['id'];
    function orderList(){
        return $this->hasMany(OrderList::class, 'order_id', 'id');
    }
    public function orderItems()
    {
        return $this->hasMany(OrderList::class, 'order_id', 'id');
    }
    
	function product(){
        return $this->hasOne(Product::class);//automatically user_id, 'id' will passed in thi hasone
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function shop()
    {
        return $this->hasOne(VendorShop::class, 'id', 'shop_id');
    }
    public function vendor()
    {
        return $this->hasOne(Vendor::class, 'id', 'vendor_id');
    }
    public function statusHistory()
    {
        return $this->hasMany(OrderStatusHistory::class, 'order_id', 'id');
    }
    public function paymentHistory()
    {
        return $this->hasOne(OrderPaymentHistory::class, 'order_id', 'id');
    }
}
