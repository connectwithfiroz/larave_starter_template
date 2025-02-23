<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('regisration_id');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone', 10);
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->string('aadhar', 12)->unique();
            $table->string('category')->nullable();
            // $table->enum('category', ['General', 'OBC', 'SC', 'ST']);
            $table->date('dob')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode', 6);
            $table->string('project_name')->nullable();
            $table->date('registration_date')->nullable();
            $table->text('address')->nullable();
            $table->text('message')->nullable();

            $table->decimal('amount', 10, 2); // Donation amount
            $table->string('razorpay_payment_id')->nullable(); // Razorpay Payment ID
            $table->string('razorpay_order_id')->nullable(); // Razorpay Order ID
            $table->string('razorpay_signature')->nullable(); // Razorpay Signature
            $table->string('status')->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('volunteers');
    }
};
