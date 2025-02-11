<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('donation_for'); // Purpose of the donation
            $table->text('message')->nullable(); // Purpose of the donation
            $table->string('name'); // Donor's name
            $table->string('email')->nullable(); // Donor's email
            $table->string('mobile_number')->nullable(); // Donor's mobile number
            $table->decimal('amount', 10, 2); // Donation amount
            $table->string('razorpay_payment_id')->nullable(); // Razorpay Payment ID
            $table->string('razorpay_order_id')->nullable(); // Razorpay Order ID
            $table->string('razorpay_signature')->nullable(); // Razorpay Signature
            $table->string('status')->nullable();
            $table->string('address')->nullable(); 
            $table->string('pan_no')->nullable(); 
            $table->string('bank_name')->nullable(); 
            $table->string('branch_name')->nullable(); 
            $table->string('donation_id')->nullable(); 
            $table->timestamps(); // Created at and Updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
